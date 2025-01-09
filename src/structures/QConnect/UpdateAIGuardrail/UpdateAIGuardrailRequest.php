<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiGuardrailId
 * @property string $assistantId
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property string $clientToken
 * @property Shapes\AIGuardrailContentPolicyConfig $contentPolicyConfig
 * @property Shapes\AIGuardrailContextualGroundingPolicyConfig $contextualGroundingPolicyConfig
 * @property string $description
 * @property Shapes\AIGuardrailSensitiveInformationPolicyConfig $sensitiveInformationPolicyConfig
 * @property Shapes\AIGuardrailTopicPolicyConfig $topicPolicyConfig
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property Shapes\AIGuardrailWordPolicyConfig $wordPolicyConfig
 */
class UpdateAIGuardrailRequest extends Request
{
    /**
     * @param array{
     *     aiGuardrailId: string,
     *     assistantId: string,
     *     blockedInputMessaging: string,
     *     blockedOutputsMessaging: string,
     *     clientToken?: string,
     *     contentPolicyConfig?: Shapes\AIGuardrailContentPolicyConfig,
     *     contextualGroundingPolicyConfig?: Shapes\AIGuardrailContextualGroundingPolicyConfig,
     *     description?: string,
     *     sensitiveInformationPolicyConfig?: Shapes\AIGuardrailSensitiveInformationPolicyConfig,
     *     topicPolicyConfig?: Shapes\AIGuardrailTopicPolicyConfig,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     wordPolicyConfig?: Shapes\AIGuardrailWordPolicyConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
