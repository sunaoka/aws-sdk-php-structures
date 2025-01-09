<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class SortDefinition extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
