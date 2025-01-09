<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListAssistants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assistantArn
 * @property string $assistantId
 * @property string $description
 * @property AssistantIntegrationConfiguration $integrationConfiguration
 * @property string $name
 * @property ServerSideEncryptionConfiguration $serverSideEncryptionConfiguration
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property array<string, string> $tags
 * @property 'AGENT' $type
 */
class AssistantSummary extends Shape
{
    /**
     * @param array{
     *     assistantArn: string,
     *     assistantId: string,
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
