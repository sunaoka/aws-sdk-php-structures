<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSetSemanticDescription|null $Description
 * @property list<CustomInstruction>|null $CustomInstructions
 */
class DataSetSemanticMetadata extends Shape
{
    /**
     * @param array{
     *     Description?: DataSetSemanticDescription|null,
     *     CustomInstructions?: list<CustomInstruction>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
