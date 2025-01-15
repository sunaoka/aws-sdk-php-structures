<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\DeleteNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string $networkArn
 * @property string $networkName
 * @property 'CREATED'|'PROVISIONING'|'AVAILABLE'|'DEPROVISIONING'|'DELETED' $status
 * @property string|null $statusReason
 */
class Network extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     networkArn: string,
     *     networkName: string,
     *     status: 'CREATED'|'PROVISIONING'|'AVAILABLE'|'DEPROVISIONING'|'DELETED',
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
