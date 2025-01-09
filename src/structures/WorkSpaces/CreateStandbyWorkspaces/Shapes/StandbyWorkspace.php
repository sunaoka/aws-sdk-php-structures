<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateStandbyWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryWorkspaceId
 * @property string $VolumeEncryptionKey
 * @property string $DirectoryId
 * @property list<Tag> $Tags
 * @property 'NO_REPLICATION'|'PRIMARY_AS_SOURCE' $DataReplication
 */
class StandbyWorkspace extends Shape
{
    /**
     * @param array{
     *     PrimaryWorkspaceId: string,
     *     VolumeEncryptionKey?: string,
     *     DirectoryId: string,
     *     Tags?: list<Tag>,
     *     DataReplication?: 'NO_REPLICATION'|'PRIMARY_AS_SOURCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
