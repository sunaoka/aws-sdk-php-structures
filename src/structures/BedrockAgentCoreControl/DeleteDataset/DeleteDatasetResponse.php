<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datasetArn
 * @property string $datasetId
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property string $datasetVersion
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DeleteDatasetResponse extends Response
{
}
