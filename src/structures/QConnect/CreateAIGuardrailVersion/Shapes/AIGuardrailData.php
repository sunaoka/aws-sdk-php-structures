<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aiGuardrailArn
 * @property string $aiGuardrailId
 * @property string $assistantArn
 * @property string $assistantId
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property AIGuardrailContentPolicyConfig $contentPolicyConfig
 * @property AIGuardrailContextualGroundingPolicyConfig $contextualGroundingPolicyConfig
 * @property string $description
 * @property \Aws\Api\DateTimeResult $modifiedTime
 * @property string $name
 * @property AIGuardrailSensitiveInformationPolicyConfig $sensitiveInformationPolicyConfig
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property array<string, string> $tags
 * @property AIGuardrailTopicPolicyConfig $topicPolicyConfig
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property AIGuardrailWordPolicyConfig $wordPolicyConfig
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
     *     contentPolicyConfig?: AIGuardrailContentPolicyConfig,
     *     contextualGroundingPolicyConfig?: AIGuardrailContextualGroundingPolicyConfig,
     *     description?: string,
     *     modifiedTime?: \Aws\Api\DateTimeResult,
     *     name: string,
     *     sensitiveInformationPolicyConfig?: AIGuardrailSensitiveInformationPolicyConfig,
     *     status?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     tags?: array<string, string>,
     *     topicPolicyConfig?: AIGuardrailTopicPolicyConfig,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     wordPolicyConfig?: AIGuardrailWordPolicyConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
