<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateSqlInjectionMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SqlInjectionMatchSetId
 * @property string $Name
 * @property list<SqlInjectionMatchTuple> $SqlInjectionMatchTuples
 */
class SqlInjectionMatchSet extends Shape
{
    /**
     * @param array{
     *     SqlInjectionMatchSetId: string,
     *     Name?: string,
     *     SqlInjectionMatchTuples: list<SqlInjectionMatchTuple>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
