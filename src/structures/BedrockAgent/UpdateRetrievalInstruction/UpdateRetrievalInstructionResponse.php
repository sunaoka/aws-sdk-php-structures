<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateRetrievalInstruction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $retrievalInstructionId
 * @property string $retrievalInstructionArn
 * @property string $name
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property 'CREATING'|'UPDATING'|'CREATE_SUCCESSFUL'|'CREATE_FAILED'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED' $lastTransitionStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateRetrievalInstructionResponse extends Response
{
}
