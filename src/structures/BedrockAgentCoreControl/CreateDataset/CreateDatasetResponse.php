<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datasetArn
 * @property string $datasetId
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateDatasetResponse extends Response
{
}
