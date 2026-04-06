<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentSpaceId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'valid'|'invalid'|'pending-confirmation'|null $status
 * @property string $associationId
 * @property string $serviceId
 * @property ServiceConfiguration $configuration
 */
class Association extends Shape
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     status?: 'valid'|'invalid'|'pending-confirmation'|null,
     *     associationId: string,
     *     serviceId: string,
     *     configuration: ServiceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
