<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBClusterSnapshotAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBClusterSnapshotIdentifier
 * @property list<DBClusterSnapshotAttribute> $DBClusterSnapshotAttributes
 */
class DBClusterSnapshotAttributesResult extends Shape
{
    /**
     * @param array{
     *     DBClusterSnapshotIdentifier?: string,
     *     DBClusterSnapshotAttributes?: list<DBClusterSnapshotAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
