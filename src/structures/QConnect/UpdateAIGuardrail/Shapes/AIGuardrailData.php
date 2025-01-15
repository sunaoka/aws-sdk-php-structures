<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aiGuardrailArn
 * @property string $aiGuardrailId
 * @property string $assistantArn
 * @property string $assistantId
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property AIGuardrailContentPolicyConfig|null $contentPolicyConfig
 * @property AIGuardrailContextualGroundingPolicyConfig|null $contextualGroundingPolicyConfig
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 * @property string $name
 * @property AIGuardrailSensitiveInformationPolicyConfig|null $sensitiveInformationPolicyConfig
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null $status
 * @property array<string, string>|null $tags
 * @property AIGuardrailTopicPolicyConfig|null $topicPolicyConfig
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property AIGuardrailWordPolicyConfig|null $wordPolicyConfig
 */
class AIGuardrailData extends Shape
{
    /**
     * @param array{
     *     aiGuardrailArn: string,
     *     aiGuardrailId: string,
     *     assistantArn: string,
     *     assistantId: string,
     *     blockedInputMessaging: string,
     *     blockedOutputsMessaging: string,
     *     contentPolicyConfig?: AIGuardrailContentPolicyConfig|null,
     *     contextualGroundingPolicyConfig?: AIGuardrailContextualGroundingPolicyConfig|null,
     *     description?: string|null,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     sensitiveInformationPolicyConfig?: AIGuardrailSensitiveInformationPolicyConfig|null,
     *     status?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null,
     *     tags?: array<string, string>|null,
     *     topicPolicyConfig?: AIGuardrailTopicPolicyConfig|null,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     wordPolicyConfig?: AIGuardrailWordPolicyConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
