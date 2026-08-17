<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListEvaluators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $evaluatorArn
 * @property string $evaluatorId
 * @property string $evaluatorName
 * @property string|null $description
 * @property 'Builtin'|'ThirdParty'|'Custom'|'CustomCode'|'CustomDerived' $evaluatorType
 * @property 'AWS'|'DeepEval'|'AutoEval'|'Custom'|null $provider
 * @property 'TOOL_CALL'|'TRACE'|'SESSION'|null $level
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property bool|null $lockedForModification
 * @property string|null $kmsKeyArn
 */
class EvaluatorSummary extends Shape
{
    /**
     * @param array{
     *     evaluatorArn: string,
     *     evaluatorId: string,
     *     evaluatorName: string,
     *     description?: string|null,
     *     evaluatorType: 'Builtin'|'ThirdParty'|'Custom'|'CustomCode'|'CustomDerived',
     *     provider?: 'AWS'|'DeepEval'|'AutoEval'|'Custom'|null,
     *     level?: 'TOOL_CALL'|'TRACE'|'SESSION'|null,
     *     status: 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     lockedForModification?: bool|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
