<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', AIAgentConfigurationData> $aiAgentConfiguration
 * @property string $assistantArn
 * @property string $assistantId
 * @property AssistantCapabilityConfiguration $capabilityConfiguration
 * @property string $description
 * @property AssistantIntegrationConfiguration $integrationConfiguration
 * @property string $name
 * @property ServerSideEncryptionConfiguration $serverSideEncryptionConfiguration
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property array<string, string> $tags
 * @property 'AGENT' $type
 */
class AssistantData extends Shape
{
    /**
     * @param array{
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', AIAgentConfigurationData>,
     *     assistantArn: string,
     *     assistantId: string,
     *     capabilityConfiguration?: AssistantCapabilityConfiguration,
     *     description?: string,
     *     integrationConfiguration?: AssistantIntegrationConfiguration,
     *     name: string,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     tags?: array<string, string>,
     *     type: 'AGENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
