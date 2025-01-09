<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateRuleset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property bool $Disabled
 * @property string $CheckExpression
 * @property array<string, string> $SubstitutionMap
 * @property Threshold $Threshold
 * @property list<ColumnSelector> $ColumnSelectors
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Disabled?: bool,
     *     CheckExpression: string,
     *     SubstitutionMap?: array<string, string>,
     *     Threshold?: Threshold,
     *     ColumnSelectors?: list<ColumnSelector>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
