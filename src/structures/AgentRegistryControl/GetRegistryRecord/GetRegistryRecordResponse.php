<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistryRecord;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $registryArn
 * @property string $recordArn
 * @property string $recordId
 * @property string $name
 * @property string|null $displayName
 * @property string|null $description
 * @property 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY' $recordType
 * @property Shapes\Descriptors|null $descriptors
 * @property string|null $recordVersion
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $statusReason
 * @property list<Shapes\Provenance>|null $provenance
 * @property bool|null $createdByAutoDetection
 * @property string|null $createdBy
 * @property Shapes\CustomMetadataDocument|null $customMetadata
 * @property 'COMPLIANT'|'NON_COMPLIANT'|null $customMetadataSchemaComplianceStatus
 * @property Shapes\RegistryRecordArtifactDownload|null $artifact
 * @property Shapes\RegistryRecordSynchronizedSource|null $synchronizedSource
 */
class GetRegistryRecordResponse extends Response
{
}
