<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterSnapshotIdentifier
 * @property string $DBClusterIdentifier
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDBClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     DBClusterSnapshotIdentifier: string,
     *     DBClusterIdentifier: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
