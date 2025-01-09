<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $description
 * @property string $guardrailId
 * @property string $guardrailArn
 * @property string $version
 * @property 'CREATING'|'UPDATING'|'VERSIONING'|'READY'|'FAILED'|'DELETING' $status
 * @property Shapes\GuardrailTopicPolicy $topicPolicy
 * @property Shapes\GuardrailContentPolicy $contentPolicy
 * @property Shapes\GuardrailWordPolicy $wordPolicy
 * @property Shapes\GuardrailSensitiveInformationPolicy $sensitiveInformationPolicy
 * @property Shapes\GuardrailContextualGroundingPolicy $contextualGroundingPolicy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<string> $statusReasons
 * @property list<string> $failureRecommendations
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property string $kmsKeyArn
 */
class GetGuardrailResponse extends Response
{
}
