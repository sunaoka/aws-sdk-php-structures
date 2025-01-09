<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSnapshotAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBSnapshotIdentifier
 * @property list<DBSnapshotAttribute> $DBSnapshotAttributes
 */
class DBSnapshotAttributesResult extends Shape
{
    /**
     * @param array{
     *     DBSnapshotIdentifier?: string,
     *     DBSnapshotAttributes?: list<DBSnapshotAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
