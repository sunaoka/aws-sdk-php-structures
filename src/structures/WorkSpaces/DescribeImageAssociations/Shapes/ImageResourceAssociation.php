<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeImageAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociatedResourceId
 * @property 'APPLICATION' $AssociatedResourceType
 * @property \Aws\Api\DateTimeResult $Created
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $ImageId
 * @property 'PENDING_INSTALL'|'PENDING_INSTALL_DEPLOYMENT'|'PENDING_UNINSTALL'|'PENDING_UNINSTALL_DEPLOYMENT'|'INSTALLING'|'UNINSTALLING'|'ERROR'|'COMPLETED'|'REMOVED' $State
 * @property AssociationStateReason $StateReason
 */
class ImageResourceAssociation extends Shape
{
    /**
     * @param array{
     *     AssociatedResourceId?: string,
     *     AssociatedResourceType?: 'APPLICATION',
     *     Created?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     ImageId?: string,
     *     State?: 'PENDING_INSTALL'|'PENDING_INSTALL_DEPLOYMENT'|'PENDING_UNINSTALL'|'PENDING_UNINSTALL_DEPLOYMENT'|'INSTALLING'|'UNINSTALLING'|'ERROR'|'COMPLETED'|'REMOVED',
     *     StateReason?: AssociationStateReason
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
