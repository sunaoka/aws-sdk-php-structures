<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property string $clientToken
 * @property Shapes\AIGuardrailContentPolicyConfig $contentPolicyConfig
 * @property Shapes\AIGuardrailContextualGroundingPolicyConfig $contextualGroundingPolicyConfig
 * @property string $description
 * @property string $name
 * @property Shapes\AIGuardrailSensitiveInformationPolicyConfig $sensitiveInformationPolicyConfig
 * @property array<string, string> $tags
 * @property Shapes\AIGuardrailTopicPolicyConfig $topicPolicyConfig
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property Shapes\AIGuardrailWordPolicyConfig $wordPolicyConfig
 */
class CreateAIGuardrailRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     blockedInputMessaging: string,
     *     blockedOutputsMessaging: string,
     *     clientToken?: string,
     *     contentPolicyConfig?: Shapes\AIGuardrailContentPolicyConfig,
     *     contextualGroundingPolicyConfig?: Shapes\AIGuardrailContextualGroundingPolicyConfig,
     *     description?: string,
     *     name: string,
     *     sensitiveInformationPolicyConfig?: Shapes\AIGuardrailSensitiveInformationPolicyConfig,
     *     tags?: array<string, string>,
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
