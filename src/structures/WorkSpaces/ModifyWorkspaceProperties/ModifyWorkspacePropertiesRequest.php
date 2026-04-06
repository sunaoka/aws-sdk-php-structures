<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceId
 * @property Shapes\WorkspaceProperties|null $WorkspaceProperties
 * @property 'NO_REPLICATION'|'PRIMARY_AS_SOURCE'|null $DataReplication
 */
class ModifyWorkspacePropertiesRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceId: string,
     *     WorkspaceProperties?: Shapes\WorkspaceProperties|null,
     *     DataReplication?: 'NO_REPLICATION'|'PRIMARY_AS_SOURCE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
