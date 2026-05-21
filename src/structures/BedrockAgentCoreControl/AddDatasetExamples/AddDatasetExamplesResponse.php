<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\AddDatasetExamples;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datasetArn
 * @property string $datasetId
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property int $addedCount
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<string> $exampleIds
 */
class AddDatasetExamplesResponse extends Response
{
}
