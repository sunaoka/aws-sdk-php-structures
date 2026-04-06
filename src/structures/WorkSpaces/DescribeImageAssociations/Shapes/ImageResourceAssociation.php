<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeImageAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociatedResourceId
 * @property 'APPLICATION'|null $AssociatedResourceType
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $ImageId
 * @property 'PENDING_INSTALL'|'PENDING_INSTALL_DEPLOYMENT'|'PENDING_UNINSTALL'|'PENDING_UNINSTALL_DEPLOYMENT'|'INSTALLING'|'UNINSTALLING'|'ERROR'|'COMPLETED'|'REMOVED'|null $State
 * @property AssociationStateReason|null $StateReason
 */
class ImageResourceAssociation extends Shape
{
    /**
     * @param array{
     *     AssociatedResourceId?: string|null,
     *     AssociatedResourceType?: 'APPLICATION'|null,
     *     Created?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     ImageId?: string|null,
     *     State?: 'PENDING_INSTALL'|'PENDING_INSTALL_DEPLOYMENT'|'PENDING_UNINSTALL'|'PENDING_UNINSTALL_DEPLOYMENT'|'INSTALLING'|'UNINSTALLING'|'ERROR'|'COMPLETED'|'REMOVED'|null,
     *     StateReason?: AssociationStateReason|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
