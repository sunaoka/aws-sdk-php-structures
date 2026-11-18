<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteDatasetGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $generationId
 * @property 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|'DELETING' $status
 */
class DeleteDatasetGenerationResponse extends Response
{
}
