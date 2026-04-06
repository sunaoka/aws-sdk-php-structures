<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateStandbyWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryWorkspaceId
 * @property string|null $VolumeEncryptionKey
 * @property string $DirectoryId
 * @property list<Tag>|null $Tags
 * @property 'NO_REPLICATION'|'PRIMARY_AS_SOURCE'|null $DataReplication
 */
class StandbyWorkspace extends Shape
{
    /**
     * @param array{
     *     PrimaryWorkspaceId: string,
     *     VolumeEncryptionKey?: string|null,
     *     DirectoryId: string,
     *     Tags?: list<Tag>|null,
     *     DataReplication?: 'NO_REPLICATION'|'PRIMARY_AS_SOURCE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
