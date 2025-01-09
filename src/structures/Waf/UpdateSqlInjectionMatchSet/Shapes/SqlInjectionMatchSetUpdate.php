<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateSqlInjectionMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSERT'|'DELETE' $Action
 * @property SqlInjectionMatchTuple $SqlInjectionMatchTuple
 */
class SqlInjectionMatchSetUpdate extends Shape
{
    /**
     * @param array{
     *     Action: 'INSERT'|'DELETE',
     *     SqlInjectionMatchTuple: SqlInjectionMatchTuple
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
