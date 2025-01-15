<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSnapshotAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBSnapshotIdentifier
 * @property list<DBSnapshotAttribute>|null $DBSnapshotAttributes
 */
class DBSnapshotAttributesResult extends Shape
{
    /**
     * @param array{
     *     DBSnapshotIdentifier?: string|null,
     *     DBSnapshotAttributes?: list<DBSnapshotAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
