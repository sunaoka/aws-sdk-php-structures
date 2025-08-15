<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property 'Warning'|'Error' $severity
 * @property FlowValidationDetails|null $details
 * @property 'CyclicConnection'|'DuplicateConnections'|'DuplicateConditionExpression'|'UnreachableNode'|'UnknownConnectionSource'|'UnknownConnectionSourceOutput'|'UnknownConnectionTarget'|'UnknownConnectionTargetInput'|'UnknownConnectionCondition'|'MalformedConditionExpression'|'MalformedNodeInputExpression'|'MismatchedNodeInputType'|'MismatchedNodeOutputType'|'IncompatibleConnectionDataType'|'MissingConnectionConfiguration'|'MissingDefaultCondition'|'MissingEndingNodes'|'MissingNodeConfiguration'|'MissingNodeInput'|'MissingNodeOutput'|'MissingStartingNodes'|'MultipleNodeInputConnections'|'UnfulfilledNodeInput'|'UnsatisfiedConnectionConditions'|'Unspecified'|'UnknownNodeInput'|'UnknownNodeOutput'|'MissingLoopInputNode'|'MissingLoopControllerNode'|'MultipleLoopInputNodes'|'MultipleLoopControllerNodes'|'LoopIncompatibleNodeType'|'InvalidLoopBoundary'|null $type
 */
class FlowValidation extends Shape
{
    /**
     * @param array{
     *     message: string,
     *     severity: 'Warning'|'Error',
     *     details?: FlowValidationDetails|null,
     *     type?: 'CyclicConnection'|'DuplicateConnections'|'DuplicateConditionExpression'|'UnreachableNode'|'UnknownConnectionSource'|'UnknownConnectionSourceOutput'|'UnknownConnectionTarget'|'UnknownConnectionTargetInput'|'UnknownConnectionCondition'|'MalformedConditionExpression'|'MalformedNodeInputExpression'|'MismatchedNodeInputType'|'MismatchedNodeOutputType'|'IncompatibleConnectionDataType'|'MissingConnectionConfiguration'|'MissingDefaultCondition'|'MissingEndingNodes'|'MissingNodeConfiguration'|'MissingNodeInput'|'MissingNodeOutput'|'MissingStartingNodes'|'MultipleNodeInputConnections'|'UnfulfilledNodeInput'|'UnsatisfiedConnectionConditions'|'Unspecified'|'UnknownNodeInput'|'UnknownNodeOutput'|'MissingLoopInputNode'|'MissingLoopControllerNode'|'MultipleLoopInputNodes'|'MultipleLoopControllerNodes'|'LoopIncompatibleNodeType'|'InvalidLoopBoundary'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
