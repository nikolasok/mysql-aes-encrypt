<?php

namespace JfelixStudio\AESEncrypt\Database;

use Illuminate\Database\MySqlConnection;

use JfelixStudio\AESEncrypt\Database\Schema\MySqlBuilderEncrypt;
use JfelixStudio\AESEncrypt\Database\Query\Grammars\MySqlGrammarEncrypt as QueryGrammar;

class MySqlConnectionEncrypt extends MySqlConnection
{
    /**
     * Get the default query grammar instance.
     *
     * @return \JfelixStudio\AESEncrypt\Database\Query\Grammars\MySqlGrammarEncrypt
     */
    protected function getDefaultQueryGrammar()
    {
        return $this->withTablePrefix(new QueryGrammar);
    }
}
