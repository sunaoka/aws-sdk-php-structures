<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateSite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SiteId
 * @property string $SiteArn
 * @property string $GlobalNetworkId
 * @property string $Description
 * @property Location $Location
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING' $State
 * @property list<Tag> $Tags
 */
class Site extends Shape
{
    /**
     * @param array{
     *     SiteId?: string,
     *     SiteArn?: string,
     *     GlobalNetworkId?: string,
     *     Description?: string,
     *     Location?: Location,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     State?: 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING',
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
