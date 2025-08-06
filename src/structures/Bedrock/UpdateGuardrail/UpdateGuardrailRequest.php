<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $guardrailIdentifier
 * @property string $name
 * @property string|null $description
 * @property Shapes\GuardrailTopicPolicyConfig|null $topicPolicyConfig
 * @property Shapes\GuardrailContentPolicyConfig|null $contentPolicyConfig
 * @property Shapes\GuardrailWordPolicyConfig|null $wordPolicyConfig
 * @property Shapes\GuardrailSensitiveInformationPolicyConfig|null $sensitiveInformationPolicyConfig
 * @property Shapes\GuardrailContextualGroundingPolicyConfig|null $contextualGroundingPolicyConfig
 * @property Shapes\GuardrailAutomatedReasoningPolicyConfig|null $automatedReasoningPolicyConfig
 * @property Shapes\GuardrailCrossRegionConfig|null $crossRegionConfig
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property string|null $kmsKeyId
 */
class UpdateGuardrailRequest extends Request
{
    /**
     * @param array{
     *     guardrailIdentifier: string,
     *     name: string,
     *     description?: string|null,
     *     topicPolicyConfig?: Shapes\GuardrailTopicPolicyConfig|null,
     *     contentPolicyConfig?: Shapes\GuardrailContentPolicyConfig|null,
     *     wordPolicyConfig?: Shapes\GuardrailWordPolicyConfig|null,
     *     sensitiveInformationPolicyConfig?: Shapes\GuardrailSensitiveInformationPolicyConfig|null,
     *     contextualGroundingPolicyConfig?: Shapes\GuardrailContextualGroundingPolicyConfig|null,
     *     automatedReasoningPolicyConfig?: Shapes\GuardrailAutomatedReasoningPolicyConfig|null,
     *     crossRegionConfig?: Shapes\GuardrailCrossRegionConfig|null,
     *     blockedInputMessaging: string,
     *     blockedOutputsMessaging: string,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
