<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $serviceId
 * @property Shapes\ServiceConfiguration $configuration
 * @property array<'RELEASE_READINESS_REVIEW'|'RELEASE_READINESS_REVIEW_AUTOMATED_TESTING', Shapes\CapabilityConfiguration>|null $capabilities
 */
class AssociateServiceRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     serviceId: string,
     *     configuration: Shapes\ServiceConfiguration,
     *     capabilities?: array<'RELEASE_READINESS_REVIEW'|'RELEASE_READINESS_REVIEW_AUTOMATED_TESTING', Shapes\CapabilityConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
