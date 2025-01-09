<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTableObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $PartitionValues
 * @property list<TableObject> $Objects
 */
class PartitionObjects extends Shape
{
    /**
     * @param array{
     *     PartitionValues?: list<string>,
     *     Objects?: list<TableObject>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
