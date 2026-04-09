<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\SearchRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registryArn
 * @property string $recordArn
 * @property string $recordId
 * @property string $name
 * @property string|null $description
 * @property 'MCP'|'A2A'|'CUSTOM'|'AGENT_SKILLS' $descriptorType
 * @property Descriptors $descriptors
 * @property string $version
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED' $status
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
     *     descriptors: Descriptors,
     *     version: string,
     *     status: 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
