<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $associationId
 * @property Shapes\ServiceConfiguration $configuration
 * @property array<'RELEASE_READINESS_REVIEW'|'RELEASE_READINESS_REVIEW_AUTOMATED_TESTING', Shapes\CapabilityConfiguration>|null $capabilities
 */
class UpdateAssociationRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     associationId: string,
     *     configuration: Shapes\ServiceConfiguration,
     *     capabilities?: array<'RELEASE_READINESS_REVIEW'|'RELEASE_READINESS_REVIEW_AUTOMATED_TESTING', Shapes\CapabilityConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
