<?php

namespace Sunaoka\Aws\Structures\DocDB\CreateDBClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterSnapshotIdentifier
 * @property string $DBClusterIdentifier
 * @property list<Shapes\Tag> $Tags
 */
class CreateDBClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     DBClusterSnapshotIdentifier: string,
     *     DBClusterIdentifier: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
