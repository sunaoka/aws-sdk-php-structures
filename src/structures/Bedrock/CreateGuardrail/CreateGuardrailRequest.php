<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\GuardrailTopicPolicyConfig|null $topicPolicyConfig
 * @property Shapes\GuardrailContentPolicyConfig|null $contentPolicyConfig
 * @property Shapes\GuardrailWordPolicyConfig|null $wordPolicyConfig
 * @property Shapes\GuardrailSensitiveInformationPolicyConfig|null $sensitiveInformationPolicyConfig
 * @property Shapes\GuardrailContextualGroundingPolicyConfig|null $contextualGroundingPolicyConfig
 * @property string $blockedInputMessaging
 * @property string $blockedOutputsMessaging
 * @property string|null $kmsKeyId
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientRequestToken
 */
class CreateGuardrailRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     topicPolicyConfig?: Shapes\GuardrailTopicPolicyConfig|null,
     *     contentPolicyConfig?: Shapes\GuardrailContentPolicyConfig|null,
     *     wordPolicyConfig?: Shapes\GuardrailWordPolicyConfig|null,
     *     sensitiveInformationPolicyConfig?: Shapes\GuardrailSensitiveInformationPolicyConfig|null,
     *     contextualGroundingPolicyConfig?: Shapes\GuardrailContextualGroundingPolicyConfig|null,
     *     blockedInputMessaging: string,
     *     blockedOutputsMessaging: string,
     *     kmsKeyId?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
