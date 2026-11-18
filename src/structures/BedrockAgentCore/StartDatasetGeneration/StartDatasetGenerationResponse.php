<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartDatasetGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $generationId
 * @property string $name
 * @property string $datasetId
 * @property 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class StartDatasetGenerationResponse extends Response
{
}
