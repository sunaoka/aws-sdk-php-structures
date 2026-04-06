<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeApplicationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $AssociatedResourceId
 * @property 'WORKSPACE'|'BUNDLE'|'IMAGE'|null $AssociatedResourceType
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'PENDING_INSTALL'|'PENDING_INSTALL_DEPLOYMENT'|'PENDING_UNINSTALL'|'PENDING_UNINSTALL_DEPLOYMENT'|'INSTALLING'|'UNINSTALLING'|'ERROR'|'COMPLETED'|'REMOVED'|null $State
 * @property AssociationStateReason|null $StateReason
 */
class ApplicationResourceAssociation extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     AssociatedResourceId?: string|null,
     *     AssociatedResourceType?: 'WORKSPACE'|'BUNDLE'|'IMAGE'|null,
     *     Created?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'PENDING_INSTALL'|'PENDING_INSTALL_DEPLOYMENT'|'PENDING_UNINSTALL'|'PENDING_UNINSTALL_DEPLOYMENT'|'INSTALLING'|'UNINSTALLING'|'ERROR'|'COMPLETED'|'REMOVED'|null,
     *     StateReason?: AssociationStateReason|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
