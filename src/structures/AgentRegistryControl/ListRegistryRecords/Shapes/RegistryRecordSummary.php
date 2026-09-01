<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registryArn
 * @property string $recordArn
 * @property string $recordId
 * @property string $name
 * @property string|null $displayName
 * @property string|null $description
 * @property 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY' $recordType
 * @property string $recordVersion
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property bool|null $createdByAutoDetection
 * @property string|null $createdBy
 * @property list<ProvenanceSummary>|null $provenanceSummaryList
 */
class RegistryRecordSummary extends Shape
{
    /**
     * @param array{
     *     registryArn: string,
     *     recordArn: string,
     *     recordId: string,
     *     name: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     recordType: 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY',
     *     recordVersion: string,
     *     status: 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     createdByAutoDetection?: bool|null,
     *     createdBy?: string|null,
     *     provenanceSummaryList?: list<ProvenanceSummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
