<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
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
 * @property list<Shapes\Tag> $tags
 * @property string $clientRequestToken
 */
class CreateGuardrailRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     topicPolicyConfig?: Shapes\GuardrailTopicPolicyConfig,
     *     contentPolicyConfig?: Shapes\GuardrailContentPolicyConfig,
     *     wordPolicyConfig?: Shapes\GuardrailWordPolicyConfig,
     *     sensitiveInformationPolicyConfig?: Shapes\GuardrailSensitiveInformationPolicyConfig,
     *     contextualGroundingPolicyConfig?: Shapes\GuardrailContextualGroundingPolicyConfig,
     *     blockedInputMessaging: string,
     *     blockedOutputsMessaging: string,
     *     kmsKeyId?: string,
     *     tags?: list<Shapes\Tag>,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
