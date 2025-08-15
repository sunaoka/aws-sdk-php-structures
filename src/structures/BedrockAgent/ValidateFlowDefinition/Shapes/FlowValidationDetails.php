<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CyclicConnectionFlowValidationDetails|null $cyclicConnection
 * @property DuplicateConnectionsFlowValidationDetails|null $duplicateConnections
 * @property DuplicateConditionExpressionFlowValidationDetails|null $duplicateConditionExpression
 * @property UnreachableNodeFlowValidationDetails|null $unreachableNode
 * @property UnknownConnectionSourceFlowValidationDetails|null $unknownConnectionSource
 * @property UnknownConnectionSourceOutputFlowValidationDetails|null $unknownConnectionSourceOutput
 * @property UnknownConnectionTargetFlowValidationDetails|null $unknownConnectionTarget
 * @property UnknownConnectionTargetInputFlowValidationDetails|null $unknownConnectionTargetInput
 * @property UnknownConnectionConditionFlowValidationDetails|null $unknownConnectionCondition
 * @property MalformedConditionExpressionFlowValidationDetails|null $malformedConditionExpression
 * @property MalformedNodeInputExpressionFlowValidationDetails|null $malformedNodeInputExpression
 * @property MismatchedNodeInputTypeFlowValidationDetails|null $mismatchedNodeInputType
 * @property MismatchedNodeOutputTypeFlowValidationDetails|null $mismatchedNodeOutputType
 * @property IncompatibleConnectionDataTypeFlowValidationDetails|null $incompatibleConnectionDataType
 * @property MissingConnectionConfigurationFlowValidationDetails|null $missingConnectionConfiguration
 * @property MissingDefaultConditionFlowValidationDetails|null $missingDefaultCondition
 * @property MissingEndingNodesFlowValidationDetails|null $missingEndingNodes
 * @property MissingNodeConfigurationFlowValidationDetails|null $missingNodeConfiguration
 * @property MissingNodeInputFlowValidationDetails|null $missingNodeInput
 * @property MissingNodeOutputFlowValidationDetails|null $missingNodeOutput
 * @property MissingStartingNodesFlowValidationDetails|null $missingStartingNodes
 * @property MultipleNodeInputConnectionsFlowValidationDetails|null $multipleNodeInputConnections
 * @property UnfulfilledNodeInputFlowValidationDetails|null $unfulfilledNodeInput
 * @property UnsatisfiedConnectionConditionsFlowValidationDetails|null $unsatisfiedConnectionConditions
 * @property UnspecifiedFlowValidationDetails|null $unspecified
 * @property UnknownNodeInputFlowValidationDetails|null $unknownNodeInput
 * @property UnknownNodeOutputFlowValidationDetails|null $unknownNodeOutput
 * @property MissingLoopInputNodeFlowValidationDetails|null $missingLoopInputNode
 * @property MissingLoopControllerNodeFlowValidationDetails|null $missingLoopControllerNode
 * @property MultipleLoopInputNodesFlowValidationDetails|null $multipleLoopInputNodes
 * @property MultipleLoopControllerNodesFlowValidationDetails|null $multipleLoopControllerNodes
 * @property LoopIncompatibleNodeTypeFlowValidationDetails|null $loopIncompatibleNodeType
 * @property InvalidLoopBoundaryFlowValidationDetails|null $invalidLoopBoundary
 */
class FlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     cyclicConnection?: CyclicConnectionFlowValidationDetails|null,
     *     duplicateConnections?: DuplicateConnectionsFlowValidationDetails|null,
     *     duplicateConditionExpression?: DuplicateConditionExpressionFlowValidationDetails|null,
     *     unreachableNode?: UnreachableNodeFlowValidationDetails|null,
     *     unknownConnectionSource?: UnknownConnectionSourceFlowValidationDetails|null,
     *     unknownConnectionSourceOutput?: UnknownConnectionSourceOutputFlowValidationDetails|null,
     *     unknownConnectionTarget?: UnknownConnectionTargetFlowValidationDetails|null,
     *     unknownConnectionTargetInput?: UnknownConnectionTargetInputFlowValidationDetails|null,
     *     unknownConnectionCondition?: UnknownConnectionConditionFlowValidationDetails|null,
     *     malformedConditionExpression?: MalformedConditionExpressionFlowValidationDetails|null,
     *     malformedNodeInputExpression?: MalformedNodeInputExpressionFlowValidationDetails|null,
     *     mismatchedNodeInputType?: MismatchedNodeInputTypeFlowValidationDetails|null,
     *     mismatchedNodeOutputType?: MismatchedNodeOutputTypeFlowValidationDetails|null,
     *     incompatibleConnectionDataType?: IncompatibleConnectionDataTypeFlowValidationDetails|null,
     *     missingConnectionConfiguration?: MissingConnectionConfigurationFlowValidationDetails|null,
     *     missingDefaultCondition?: MissingDefaultConditionFlowValidationDetails|null,
     *     missingEndingNodes?: MissingEndingNodesFlowValidationDetails|null,
     *     missingNodeConfiguration?: MissingNodeConfigurationFlowValidationDetails|null,
     *     missingNodeInput?: MissingNodeInputFlowValidationDetails|null,
     *     missingNodeOutput?: MissingNodeOutputFlowValidationDetails|null,
     *     missingStartingNodes?: MissingStartingNodesFlowValidationDetails|null,
     *     multipleNodeInputConnections?: MultipleNodeInputConnectionsFlowValidationDetails|null,
     *     unfulfilledNodeInput?: UnfulfilledNodeInputFlowValidationDetails|null,
     *     unsatisfiedConnectionConditions?: UnsatisfiedConnectionConditionsFlowValidationDetails|null,
     *     unspecified?: UnspecifiedFlowValidationDetails|null,
     *     unknownNodeInput?: UnknownNodeInputFlowValidationDetails|null,
     *     unknownNodeOutput?: UnknownNodeOutputFlowValidationDetails|null,
     *     missingLoopInputNode?: MissingLoopInputNodeFlowValidationDetails|null,
     *     missingLoopControllerNode?: MissingLoopControllerNodeFlowValidationDetails|null,
     *     multipleLoopInputNodes?: MultipleLoopInputNodesFlowValidationDetails|null,
     *     multipleLoopControllerNodes?: MultipleLoopControllerNodesFlowValidationDetails|null,
     *     loopIncompatibleNodeType?: LoopIncompatibleNodeTypeFlowValidationDetails|null,
     *     invalidLoopBoundary?: InvalidLoopBoundaryFlowValidationDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
