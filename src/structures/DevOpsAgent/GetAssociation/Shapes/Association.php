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
 * @property array<'RELEASE_READINESS_REVIEW'|'RELEASE_READINESS_REVIEW_AUTOMATED_TESTING', CapabilityConfiguration>|null $capabilities
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
     *     configuration: ServiceConfiguration,
     *     capabilities?: array<'RELEASE_READINESS_REVIEW'|'RELEASE_READINESS_REVIEW_AUTOMATED_TESTING', CapabilityConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
