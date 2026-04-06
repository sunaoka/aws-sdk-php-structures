<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeBundleAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociatedResourceId
 * @property 'APPLICATION'|null $AssociatedResourceType
 * @property string|null $BundleId
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'PENDING_INSTALL'|'PENDING_INSTALL_DEPLOYMENT'|'PENDING_UNINSTALL'|'PENDING_UNINSTALL_DEPLOYMENT'|'INSTALLING'|'UNINSTALLING'|'ERROR'|'COMPLETED'|'REMOVED'|null $State
 * @property AssociationStateReason|null $StateReason
 */
class BundleResourceAssociation extends Shape
{
    /**
     * @param array{
     *     AssociatedResourceId?: string|null,
     *     AssociatedResourceType?: 'APPLICATION'|null,
     *     BundleId?: string|null,
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
