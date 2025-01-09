<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $guardrailIdentifier
 * @property string $name
 * @property string $description
 * @property Shapes\GuardrailTopicPolicyConfig $topicPolicyConfig
 * @property Shapes\GuardrailContentPolicyConfig $contentPolicyConfig
 * @property Shapes\GuardrailWordPolicyConfig $wordPolicyConfig
 * @property Shapes\GuardrailSensitiveInformationPolicyConfig $sensitiveInformationPolicyConfig
 * @property Shapes\GuardrailContextualGroundingPolicyConfig $contextualGroundingPolicyConfig
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property string $kmsKeyId
 */
class UpdateGuardrailRequest extends Request
{
    /**
     * @param array{
     *     guardrailIdentifier: string,
     *     name: string,
     *     description?: string,
     *     topicPolicyConfig?: Shapes\GuardrailTopicPolicyConfig,
     *     contentPolicyConfig?: Shapes\GuardrailContentPolicyConfig,
     *     wordPolicyConfig?: Shapes\GuardrailWordPolicyConfig,
     *     sensitiveInformationPolicyConfig?: Shapes\GuardrailSensitiveInformationPolicyConfig,
     *     contextualGroundingPolicyConfig?: Shapes\GuardrailContextualGroundingPolicyConfig,
     *     blockedInputMessaging: string,
     *     blockedOutputsMessaging: string,
     *     kmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
