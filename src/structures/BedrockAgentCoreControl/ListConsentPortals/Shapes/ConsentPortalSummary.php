<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListConsentPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConsentPortalSource> $sources
 * @property string $consentPortalArn
 * @property string $consentPortalId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property string $name
 * @property string|null $portalUrl
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ConsentPortalSummary extends Shape
{
    /**
     * @param array{
     *     sources: list<ConsentPortalSource>,
     *     consentPortalArn: string,
     *     consentPortalId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     name: string,
     *     portalUrl?: string|null,
     *     status: 'CREATING'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'FAILED',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
