<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetRetrievalInstruction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $retrievalInstructionId
 * @property string $retrievalInstructionArn
 * @property string $name
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property 'CREATING'|'UPDATING'|'CREATE_SUCCESSFUL'|'CREATE_FAILED'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED' $lastTransitionStatus
 * @property Shapes\RetrievalInstructionContent|null $instruction
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $description
 * @property string|null $customerEncryptionKeyArn
 * @property list<Shapes\RetrievalInstructionFailureReason>|null $lastTransitionStatusReasons
 * @property string|null $version
 * @property string|null $latestVersion
 */
class GetRetrievalInstructionResponse extends Response
{
}
