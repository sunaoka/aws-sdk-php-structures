<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LinkId
 * @property string|null $LinkArn
 * @property string|null $GlobalNetworkId
 * @property string|null $SiteId
 * @property string|null $Description
 * @property string|null $Type
 * @property Bandwidth|null $Bandwidth
 * @property string|null $Provider
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING'|null $State
 * @property list<Tag>|null $Tags
 */
class Link extends Shape
{
    /**
     * @param array{
     *     LinkId?: string|null,
     *     LinkArn?: string|null,
     *     GlobalNetworkId?: string|null,
     *     SiteId?: string|null,
     *     Description?: string|null,
     *     Type?: string|null,
     *     Bandwidth?: Bandwidth|null,
     *     Provider?: string|null,
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
