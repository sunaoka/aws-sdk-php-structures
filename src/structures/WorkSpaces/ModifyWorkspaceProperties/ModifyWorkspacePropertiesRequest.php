<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceId
 * @property Shapes\WorkspaceProperties $WorkspaceProperties
 * @property 'NO_REPLICATION'|'PRIMARY_AS_SOURCE' $DataReplication
 */
class ModifyWorkspacePropertiesRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceId: string,
     *     WorkspaceProperties?: Shapes\WorkspaceProperties,
     *     DataReplication?: 'NO_REPLICATION'|'PRIMARY_AS_SOURCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
