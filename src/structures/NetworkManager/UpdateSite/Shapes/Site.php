<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateSite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SiteId
 * @property string|null $SiteArn
 * @property string|null $GlobalNetworkId
 * @property string|null $Description
 * @property Location|null $Location
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING'|null $State
 * @property list<Tag>|null $Tags
 */
class Site extends Shape
{
    /**
     * @param array{
     *     SiteId?: string|null,
     *     SiteArn?: string|null,
     *     GlobalNetworkId?: string|null,
     *     Description?: string|null,
     *     Location?: Location|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     State?: 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
