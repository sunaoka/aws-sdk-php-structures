<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assistantArn
 * @property string $assistantId
 * @property string|null $description
 * @property AssistantIntegrationConfiguration|null $integrationConfiguration
 * @property string $name
 * @property ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property array<string, string>|null $tags
 * @property 'AGENT' $type
 */
class AssistantData extends Shape
{
    /**
     * @param array{
     *     assistantArn: string,
     *     assistantId: string,
     *     description?: string|null,
     *     integrationConfiguration?: AssistantIntegrationConfiguration|null,
     *     name: string,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration|null,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     tags?: array<string, string>|null,
     *     type: 'AGENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
