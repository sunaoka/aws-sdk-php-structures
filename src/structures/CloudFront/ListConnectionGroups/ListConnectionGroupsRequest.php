<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConnectionGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConnectionGroupAssociationFilter|null $AssociationFilter
 * @property string|null $Marker
 * @property int|null $MaxItems
 */
class ListConnectionGroupsRequest extends Request
{
    /**
     * @param array{
     *     AssociationFilter?: Shapes\ConnectionGroupAssociationFilter|null,
     *     Marker?: string|null,
     *     MaxItems?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
