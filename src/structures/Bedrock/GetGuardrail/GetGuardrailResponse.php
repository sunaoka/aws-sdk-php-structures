<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string|null $description
 * @property string $guardrailId
 * @property string $guardrailArn
 * @property string $version
 * @property 'CREATING'|'UPDATING'|'VERSIONING'|'READY'|'FAILED'|'DELETING' $status
 * @property Shapes\GuardrailTopicPolicy|null $topicPolicy
 * @property Shapes\GuardrailContentPolicy|null $contentPolicy
 * @property Shapes\GuardrailWordPolicy|null $wordPolicy
 * @property Shapes\GuardrailSensitiveInformationPolicy|null $sensitiveInformationPolicy
 * @property Shapes\GuardrailContextualGroundingPolicy|null $contextualGroundingPolicy
 * @property Shapes\GuardrailCrossRegionDetails|null $crossRegionDetails
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<string>|null $statusReasons
 * @property list<string>|null $failureRecommendations
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property string|null $kmsKeyArn
 */
class GetGuardrailResponse extends Response
{
}
