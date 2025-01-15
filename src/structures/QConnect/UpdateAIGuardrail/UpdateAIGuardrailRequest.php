<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiGuardrailId
 * @property string $assistantId
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property string|null $clientToken
 * @property Shapes\AIGuardrailContentPolicyConfig|null $contentPolicyConfig
 * @property Shapes\AIGuardrailContextualGroundingPolicyConfig|null $contextualGroundingPolicyConfig
 * @property string|null $description
 * @property Shapes\AIGuardrailSensitiveInformationPolicyConfig|null $sensitiveInformationPolicyConfig
 * @property Shapes\AIGuardrailTopicPolicyConfig|null $topicPolicyConfig
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property Shapes\AIGuardrailWordPolicyConfig|null $wordPolicyConfig
 */
class UpdateAIGuardrailRequest extends Request
{
    /**
     * @param array{
     *     aiGuardrailId: string,
     *     assistantId: string,
     *     blockedInputMessaging: string,
     *     blockedOutputsMessaging: string,
     *     clientToken?: string|null,
     *     contentPolicyConfig?: Shapes\AIGuardrailContentPolicyConfig|null,
     *     contextualGroundingPolicyConfig?: Shapes\AIGuardrailContextualGroundingPolicyConfig|null,
     *     description?: string|null,
     *     sensitiveInformationPolicyConfig?: Shapes\AIGuardrailSensitiveInformationPolicyConfig|null,
     *     topicPolicyConfig?: Shapes\AIGuardrailTopicPolicyConfig|null,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     wordPolicyConfig?: Shapes\AIGuardrailWordPolicyConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
