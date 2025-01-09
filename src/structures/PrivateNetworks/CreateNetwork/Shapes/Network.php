<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\CreateNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $networkArn
 * @property string $networkName
 * @property 'CREATED'|'PROVISIONING'|'AVAILABLE'|'DEPROVISIONING'|'DELETED' $status
 * @property string $statusReason
 */
class Network extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     networkArn: string,
     *     networkName: string,
     *     status: 'CREATED'|'PROVISIONING'|'AVAILABLE'|'DEPROVISIONING'|'DELETED',
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
