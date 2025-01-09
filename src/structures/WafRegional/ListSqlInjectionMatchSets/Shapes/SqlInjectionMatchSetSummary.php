<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListSqlInjectionMatchSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SqlInjectionMatchSetId
 * @property string $Name
 */
class SqlInjectionMatchSetSummary extends Shape
{
    /**
     * @param array{
     *     SqlInjectionMatchSetId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
