<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBClusterSnapshotAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property list<string>|null $AttributeValues
 */
class DBClusterSnapshotAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     AttributeValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
