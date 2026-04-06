<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowValidationDetails|null $details
 * @property string $message
 * @property 'Warning'|'Error' $severity
 * @property 'CyclicConnection'|'DuplicateConnections'|'DuplicateConditionExpression'|'UnreachableNode'|'UnknownConnectionSource'|'UnknownConnectionSourceOutput'|'UnknownConnectionTarget'|'UnknownConnectionTargetInput'|'UnknownConnectionCondition'|'MalformedConditionExpression'|'MalformedNodeInputExpression'|'MismatchedNodeInputType'|'MismatchedNodeOutputType'|'IncompatibleConnectionDataType'|'MissingConnectionConfiguration'|'MissingDefaultCondition'|'MissingEndingNodes'|'MissingNodeConfiguration'|'MissingNodeInput'|'MissingNodeOutput'|'MissingStartingNodes'|'MultipleNodeInputConnections'|'UnfulfilledNodeInput'|'UnsatisfiedConnectionConditions'|'Unspecified'|null $type
 */
class FlowValidation extends Shape
{
    /**
     * @param array{
     *     details?: FlowValidationDetails|null,
     *     message: string,
     *     severity: 'Warning'|'Error',
     *     type?: 'CyclicConnection'|'DuplicateConnections'|'DuplicateConditionExpression'|'UnreachableNode'|'UnknownConnectionSource'|'UnknownConnectionSourceOutput'|'UnknownConnectionTarget'|'UnknownConnectionTargetInput'|'UnknownConnectionCondition'|'MalformedConditionExpression'|'MalformedNodeInputExpression'|'MismatchedNodeInputType'|'MismatchedNodeOutputType'|'IncompatibleConnectionDataType'|'MissingConnectionConfiguration'|'MissingDefaultCondition'|'MissingEndingNodes'|'MissingNodeConfiguration'|'MissingNodeInput'|'MissingNodeOutput'|'MissingStartingNodes'|'MultipleNodeInputConnections'|'UnfulfilledNodeInput'|'UnsatisfiedConnectionConditions'|'Unspecified'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
