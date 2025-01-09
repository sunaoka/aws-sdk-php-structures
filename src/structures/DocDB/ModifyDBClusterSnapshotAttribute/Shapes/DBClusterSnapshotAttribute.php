<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBClusterSnapshotAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property list<string> $AttributeValues
 */
class DBClusterSnapshotAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string,
     *     AttributeValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
