<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateRuleset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property bool|null $Disabled
 * @property string $CheckExpression
 * @property array<string, string>|null $SubstitutionMap
 * @property Threshold|null $Threshold
 * @property list<ColumnSelector>|null $ColumnSelectors
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Disabled?: bool|null,
     *     CheckExpression: string,
     *     SubstitutionMap?: array<string, string>|null,
     *     Threshold?: Threshold|null,
     *     ColumnSelectors?: list<ColumnSelector>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
