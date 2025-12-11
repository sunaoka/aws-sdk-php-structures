<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListEvaluators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $evaluatorArn
 * @property string $evaluatorId
 * @property string $evaluatorName
 * @property string|null $description
 * @property 'Builtin'|'Custom' $evaluatorType
 * @property 'TOOL_CALL'|'TRACE'|'SESSION'|null $level
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property bool|null $lockedForModification
 */
class EvaluatorSummary extends Shape
{
    /**
     * @param array{
     *     evaluatorArn: string,
     *     evaluatorId: string,
     *     evaluatorName: string,
     *     description?: string|null,
     *     evaluatorType: 'Builtin'|'Custom',
     *     level?: 'TOOL_CALL'|'TRACE'|'SESSION'|null,
     *     status: 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     lockedForModification?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
