<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property string|null $clientToken
 * @property Shapes\AIGuardrailContentPolicyConfig|null $contentPolicyConfig
 * @property Shapes\AIGuardrailContextualGroundingPolicyConfig|null $contextualGroundingPolicyConfig
 * @property string|null $description
 * @property string $name
 * @property Shapes\AIGuardrailSensitiveInformationPolicyConfig|null $sensitiveInformationPolicyConfig
 * @property array<string, string>|null $tags
 * @property Shapes\AIGuardrailTopicPolicyConfig|null $topicPolicyConfig
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property Shapes\AIGuardrailWordPolicyConfig|null $wordPolicyConfig
 */
class CreateAIGuardrailRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     blockedInputMessaging: string,
     *     blockedOutputsMessaging: string,
     *     clientToken?: string|null,
     *     contentPolicyConfig?: Shapes\AIGuardrailContentPolicyConfig|null,
     *     contextualGroundingPolicyConfig?: Shapes\AIGuardrailContextualGroundingPolicyConfig|null,
     *     description?: string|null,
     *     name: string,
     *     sensitiveInformationPolicyConfig?: Shapes\AIGuardrailSensitiveInformationPolicyConfig|null,
     *     tags?: array<string, string>|null,
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
