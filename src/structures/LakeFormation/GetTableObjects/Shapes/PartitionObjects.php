<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTableObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $PartitionValues
 * @property list<TableObject>|null $Objects
 */
class PartitionObjects extends Shape
{
    /**
     * @param array{
     *     PartitionValues?: list<string>|null,
     *     Objects?: list<TableObject>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
