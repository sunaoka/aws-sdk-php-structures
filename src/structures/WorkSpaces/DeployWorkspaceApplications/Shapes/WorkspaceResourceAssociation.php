<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeployWorkspaceApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociatedResourceId
 * @property 'APPLICATION' $AssociatedResourceType
 * @property \Aws\Api\DateTimeResult $Created
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property 'PENDING_INSTALL'|'PENDING_INSTALL_DEPLOYMENT'|'PENDING_UNINSTALL'|'PENDING_UNINSTALL_DEPLOYMENT'|'INSTALLING'|'UNINSTALLING'|'ERROR'|'COMPLETED'|'REMOVED' $State
 * @property AssociationStateReason $StateReason
 * @property string $WorkspaceId
 */
class WorkspaceResourceAssociation extends Shape
{
    /**
     * @param array{
     *     AssociatedResourceId?: string,
     *     AssociatedResourceType?: 'APPLICATION',
     *     Created?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     State?: 'PENDING_INSTALL'|'PENDING_INSTALL_DEPLOYMENT'|'PENDING_UNINSTALL'|'PENDING_UNINSTALL_DEPLOYMENT'|'INSTALLING'|'UNINSTALLING'|'ERROR'|'COMPLETED'|'REMOVED',
     *     StateReason?: AssociationStateReason,
     *     WorkspaceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
