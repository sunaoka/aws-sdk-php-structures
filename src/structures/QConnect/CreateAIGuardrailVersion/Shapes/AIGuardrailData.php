<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assistantId
 * @property string $assistantArn
 * @property string $aiGuardrailArn
 * @property string $aiGuardrailId
 * @property string $name
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property string|null $description
 * @property AIGuardrailTopicPolicyConfig|null $topicPolicyConfig
 * @property AIGuardrailContentPolicyConfig|null $contentPolicyConfig
 * @property AIGuardrailWordPolicyConfig|null $wordPolicyConfig
 * @property AIGuardrailSensitiveInformationPolicyConfig|null $sensitiveInformationPolicyConfig
 * @property AIGuardrailContextualGroundingPolicyConfig|null $contextualGroundingPolicyConfig
 * @property array<string, string>|null $tags
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 */
class AIGuardrailData extends Shape
{
    /**
     * @param array{
     *     assistantId: string,
     *     assistantArn: string,
     *     aiGuardrailArn: string,
     *     aiGuardrailId: string,
     *     name: string,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     blockedInputMessaging: string,
     *     blockedOutputsMessaging: string,
     *     description?: string|null,
     *     topicPolicyConfig?: AIGuardrailTopicPolicyConfig|null,
     *     contentPolicyConfig?: AIGuardrailContentPolicyConfig|null,
     *     wordPolicyConfig?: AIGuardrailWordPolicyConfig|null,
     *     sensitiveInformationPolicyConfig?: AIGuardrailSensitiveInformationPolicyConfig|null,
     *     contextualGroundingPolicyConfig?: AIGuardrailContextualGroundingPolicyConfig|null,
     *     tags?: array<string, string>|null,
     *     status?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
