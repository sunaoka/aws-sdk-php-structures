<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\SearchDiscoverableRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registryArn
 * @property string $recordArn
 * @property string $recordId
 * @property string $name
 * @property string|null $description
 * @property string|null $displayName
 * @property 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY' $recordType
 * @property Descriptors $descriptors
 * @property string $recordVersion
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property CustomMetadataDocument|null $customMetadata
 * @property RegistryRecordArtifactDownload|null $artifact
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
     *     displayName?: string|null,
     *     recordType: 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY',
     *     descriptors: Descriptors,
     *     recordVersion: string,
     *     status: 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     customMetadata?: CustomMetadataDocument|null,
     *     artifact?: RegistryRecordArtifactDownload|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
