<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registryArn
 * @property string $recordArn
 * @property string $recordId
 * @property string $name
 * @property string|null $description
 * @property 'MCP'|'A2A'|'CUSTOM'|'AGENT_SKILLS' $descriptorType
 * @property string $recordVersion
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class RegistryRecordSummary extends Shape
{
    /**
     * @param array{
     *     registryArn: string,
     *     recordArn: string,
     *     recordId: string,
     *     name: string,
     *     description?: string|null,
     *     descriptorType: 'MCP'|'A2A'|'CUSTOM'|'AGENT_SKILLS',
     *     recordVersion: string,
     *     status: 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
