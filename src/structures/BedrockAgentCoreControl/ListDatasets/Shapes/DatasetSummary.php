<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetArn
 * @property string $datasetId
 * @property string $datasetName
 * @property string|null $description
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property 'MODIFIED'|'UNMODIFIED'|null $draftStatus
 * @property 'AGENTCORE_EVALUATION_PREDEFINED_V1'|'AGENTCORE_EVALUATION_SIMULATED_V1' $schemaType
 * @property int $exampleCount
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DatasetSummary extends Shape
{
    /**
     * @param array{
     *     datasetArn: string,
     *     datasetId: string,
     *     datasetName: string,
     *     description?: string|null,
     *     status: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED',
     *     draftStatus?: 'MODIFIED'|'UNMODIFIED'|null,
     *     schemaType: 'AGENTCORE_EVALUATION_PREDEFINED_V1'|'AGENTCORE_EVALUATION_SIMULATED_V1',
     *     exampleCount: int,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
