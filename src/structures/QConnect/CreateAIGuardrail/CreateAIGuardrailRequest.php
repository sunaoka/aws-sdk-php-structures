<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $assistantId
 * @property string $name
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property string|null $description
 * @property Shapes\AIGuardrailTopicPolicyConfig|null $topicPolicyConfig
 * @property Shapes\AIGuardrailContentPolicyConfig|null $contentPolicyConfig
 * @property Shapes\AIGuardrailWordPolicyConfig|null $wordPolicyConfig
 * @property Shapes\AIGuardrailSensitiveInformationPolicyConfig|null $sensitiveInformationPolicyConfig
 * @property Shapes\AIGuardrailContextualGroundingPolicyConfig|null $contextualGroundingPolicyConfig
 * @property array<string, string>|null $tags
 */
class CreateAIGuardrailRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     assistantId: string,
     *     name: string,
     *     blockedInputMessaging: string,
     *     blockedOutputsMessaging: string,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     description?: string|null,
     *     topicPolicyConfig?: Shapes\AIGuardrailTopicPolicyConfig|null,
     *     contentPolicyConfig?: Shapes\AIGuardrailContentPolicyConfig|null,
     *     wordPolicyConfig?: Shapes\AIGuardrailWordPolicyConfig|null,
     *     sensitiveInformationPolicyConfig?: Shapes\AIGuardrailSensitiveInformationPolicyConfig|null,
     *     contextualGroundingPolicyConfig?: Shapes\AIGuardrailContextualGroundingPolicyConfig|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
