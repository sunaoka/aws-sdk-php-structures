<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DescribeGlobalNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GlobalNetworkId
 * @property string|null $GlobalNetworkArn
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING'|null $State
 * @property list<Tag>|null $Tags
 */
class GlobalNetwork extends Shape
{
    /**
     * @param array{
     *     GlobalNetworkId?: string|null,
     *     GlobalNetworkArn?: string|null,
     *     Description?: string|null,
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
