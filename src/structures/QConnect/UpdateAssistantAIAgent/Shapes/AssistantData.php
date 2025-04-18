<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAssistantAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assistantId
 * @property string $assistantArn
 * @property string $name
 * @property 'AGENT' $type
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property AssistantIntegrationConfiguration|null $integrationConfiguration
 * @property AssistantCapabilityConfiguration|null $capabilityConfiguration
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', AIAgentConfigurationData>|null $aiAgentConfiguration
 */
class AssistantData extends Shape
{
    /**
     * @param array{
     *     assistantId: string,
     *     assistantArn: string,
     *     name: string,
     *     type: 'AGENT',
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration|null,
     *     integrationConfiguration?: AssistantIntegrationConfiguration|null,
     *     capabilityConfiguration?: AssistantCapabilityConfiguration|null,
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', AIAgentConfigurationData>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
