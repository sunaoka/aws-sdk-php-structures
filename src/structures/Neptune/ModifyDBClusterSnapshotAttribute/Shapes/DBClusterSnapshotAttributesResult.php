<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBClusterSnapshotAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBClusterSnapshotIdentifier
 * @property list<DBClusterSnapshotAttribute>|null $DBClusterSnapshotAttributes
 */
class DBClusterSnapshotAttributesResult extends Shape
{
    /**
     * @param array{
     *     DBClusterSnapshotIdentifier?: string|null,
     *     DBClusterSnapshotAttributes?: list<DBClusterSnapshotAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
