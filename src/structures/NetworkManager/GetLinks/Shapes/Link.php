<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LinkId
 * @property string $LinkArn
 * @property string $GlobalNetworkId
 * @property string $SiteId
 * @property string $Description
 * @property string $Type
 * @property Bandwidth $Bandwidth
 * @property string $Provider
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING' $State
 * @property list<Tag> $Tags
 */
class Link extends Shape
{
    /**
     * @param array{
     *     LinkId?: string,
     *     LinkArn?: string,
     *     GlobalNetworkId?: string,
     *     SiteId?: string,
     *     Description?: string,
     *     Type?: string,
     *     Bandwidth?: Bandwidth,
     *     Provider?: string,
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
