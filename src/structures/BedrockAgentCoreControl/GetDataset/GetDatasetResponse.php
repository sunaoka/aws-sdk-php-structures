<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datasetArn
 * @property string $datasetId
 * @property string $datasetVersion
 * @property string $datasetName
 * @property string|null $description
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property 'MODIFIED'|'UNMODIFIED'|null $draftStatus
 * @property string|null $failureReason
 * @property 'AGENTCORE_EVALUATION_PREDEFINED_V1'|'AGENTCORE_EVALUATION_SIMULATED_V1' $schemaType
 * @property string|null $kmsKeyArn
 * @property int $exampleCount
 * @property string|null $downloadUrl
 * @property \Aws\Api\DateTimeResult|null $downloadUrlExpiresAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property array<string, string>|null $tags
 */
class GetDatasetResponse extends Response
{
}
