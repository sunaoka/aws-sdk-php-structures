<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetAgentInsight;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'FAILURE' $type
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property int<0, max>|null $affectedSessionCount
 * @property list<Shapes\SampleSession>|null $sampleSessions
 * @property list<Shapes\InsightRootCause>|null $rootCauses
 * @property string $agentInsightId
 * @property string $applicationName
 * @property string|null $batchEvaluationId
 * @property 'AVAILABLE'|'CUSTOMER_KEY_UNAVAILABLE'|'UNAVAILABLE' $customerMetadataStatus
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ACTIVE'|'ARCHIVED' $archiveStatus
 * @property \Aws\Api\DateTimeResult|null $lastSeenAt
 */
class GetAgentInsightResponse extends Response
{
}
