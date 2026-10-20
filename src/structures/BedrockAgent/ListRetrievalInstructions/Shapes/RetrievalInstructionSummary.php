<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListRetrievalInstructions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $retrievalInstructionId
 * @property string $retrievalInstructionArn
 * @property string $name
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property 'CREATING'|'UPDATING'|'CREATE_SUCCESSFUL'|'CREATE_FAILED'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED' $lastTransitionStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $description
 */
class RetrievalInstructionSummary extends Shape
{
    /**
     * @param array{
     *     retrievalInstructionId: string,
     *     retrievalInstructionArn: string,
     *     name: string,
     *     status: 'ACTIVE'|'INACTIVE',
     *     lastTransitionStatus: 'CREATING'|'UPDATING'|'CREATE_SUCCESSFUL'|'CREATE_FAILED'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
