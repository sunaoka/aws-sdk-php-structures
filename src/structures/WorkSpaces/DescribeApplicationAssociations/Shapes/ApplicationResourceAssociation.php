<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeApplicationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $AssociatedResourceId
 * @property 'WORKSPACE'|'BUNDLE'|'IMAGE' $AssociatedResourceType
 * @property \Aws\Api\DateTimeResult $Created
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property 'PENDING_INSTALL'|'PENDING_INSTALL_DEPLOYMENT'|'PENDING_UNINSTALL'|'PENDING_UNINSTALL_DEPLOYMENT'|'INSTALLING'|'UNINSTALLING'|'ERROR'|'COMPLETED'|'REMOVED' $State
 * @property AssociationStateReason $StateReason
 */
class ApplicationResourceAssociation extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     AssociatedResourceId?: string,
     *     AssociatedResourceType?: 'WORKSPACE'|'BUNDLE'|'IMAGE',
     *     Created?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     State?: 'PENDING_INSTALL'|'PENDING_INSTALL_DEPLOYMENT'|'PENDING_UNINSTALL'|'PENDING_UNINSTALL_DEPLOYMENT'|'INSTALLING'|'UNINSTALLING'|'ERROR'|'COMPLETED'|'REMOVED',
     *     StateReason?: AssociationStateReason
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
