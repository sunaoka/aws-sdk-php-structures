<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteGlobalNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlobalNetworkId
 * @property string $GlobalNetworkArn
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING' $State
 * @property list<Tag> $Tags
 */
class GlobalNetwork extends Shape
{
    /**
     * @param array{
     *     GlobalNetworkId?: string,
     *     GlobalNetworkArn?: string,
     *     Description?: string,
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
