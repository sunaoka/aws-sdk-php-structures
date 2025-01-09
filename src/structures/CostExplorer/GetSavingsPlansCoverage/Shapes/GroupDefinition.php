<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIMENSION'|'TAG'|'COST_CATEGORY' $Type
 * @property string $Key
 */
class GroupDefinition extends Shape
{
    /**
     * @param array{
     *     Type?: 'DIMENSION'|'TAG'|'COST_CATEGORY',
     *     Key?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
