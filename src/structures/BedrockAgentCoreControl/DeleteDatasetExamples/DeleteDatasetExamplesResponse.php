<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteDatasetExamples;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datasetArn
 * @property string $datasetId
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property int $deletedCount
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DeleteDatasetExamplesResponse extends Response
{
}
