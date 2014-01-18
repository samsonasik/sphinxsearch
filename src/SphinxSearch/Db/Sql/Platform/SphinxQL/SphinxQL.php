<?php
/**
 * ZF2 Sphinx Search
 *
 * @link        https://github.com/ripaclub/zf2-sphinxsearch
 * @copyright   Copyright (c) 2014, Leonardo Di Donato <leodidonato at gmail dot com>, Leonardo Grasso <me at leonardograsso dot com>
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace SphinxSearch\Db\Sql\Platform\SphinxQL;

use Zend\Db\Sql\Platform\AbstractPlatform;

class SphinxQL extends AbstractPlatform
{
    public function __construct()
    {
        $this->setTypeDecorator('Zend\Db\Sql\Select', new SelectDecorator());
    }
}
