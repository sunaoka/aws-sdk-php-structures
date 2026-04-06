<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $assistantId
 * @property string $aiGuardrailId
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property string|null $description
 * @property Shapes\AIGuardrailTopicPolicyConfig|null $topicPolicyConfig
 * @property Shapes\AIGuardrailContentPolicyConfig|null $contentPolicyConfig
 * @property Shapes\AIGuardrailWordPolicyConfig|null $wordPolicyConfig
 * @property Shapes\AIGuardrailSensitiveInformationPolicyConfig|null $sensitiveInformationPolicyConfig
 * @property Shapes\AIGuardrailContextualGroundingPolicyConfig|null $contextualGroundingPolicyConfig
 */
class UpdateAIGuardrailRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     assistantId: string,
     *     aiGuardrailId: string,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     blockedInputMessaging: string,
     *     blockedOutputsMessaging: string,
     *     description?: string|null,
     *     topicPolicyConfig?: Shapes\AIGuardrailTopicPolicyConfig|null,
     *     contentPolicyConfig?: Shapes\AIGuardrailContentPolicyConfig|null,
     *     wordPolicyConfig?: Shapes\AIGuardrailWordPolicyConfig|null,
     *     sensitiveInformationPolicyConfig?: Shapes\AIGuardrailSensitiveInformationPolicyConfig|null,
     *     contextualGroundingPolicyConfig?: Shapes\AIGuardrailContextualGroundingPolicyConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
