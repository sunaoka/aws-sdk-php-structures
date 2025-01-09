<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CyclicConnectionFlowValidationDetails $cyclicConnection
 * @property DuplicateConditionExpressionFlowValidationDetails $duplicateConditionExpression
 * @property DuplicateConnectionsFlowValidationDetails $duplicateConnections
 * @property IncompatibleConnectionDataTypeFlowValidationDetails $incompatibleConnectionDataType
 * @property MalformedConditionExpressionFlowValidationDetails $malformedConditionExpression
 * @property MalformedNodeInputExpressionFlowValidationDetails $malformedNodeInputExpression
 * @property MismatchedNodeInputTypeFlowValidationDetails $mismatchedNodeInputType
 * @property MismatchedNodeOutputTypeFlowValidationDetails $mismatchedNodeOutputType
 * @property MissingConnectionConfigurationFlowValidationDetails $missingConnectionConfiguration
 * @property MissingDefaultConditionFlowValidationDetails $missingDefaultCondition
 * @property MissingEndingNodesFlowValidationDetails $missingEndingNodes
 * @property MissingNodeConfigurationFlowValidationDetails $missingNodeConfiguration
 * @property MissingNodeInputFlowValidationDetails $missingNodeInput
 * @property MissingNodeOutputFlowValidationDetails $missingNodeOutput
 * @property MissingStartingNodesFlowValidationDetails $missingStartingNodes
 * @property MultipleNodeInputConnectionsFlowValidationDetails $multipleNodeInputConnections
 * @property UnfulfilledNodeInputFlowValidationDetails $unfulfilledNodeInput
 * @property UnknownConnectionConditionFlowValidationDetails $unknownConnectionCondition
 * @property UnknownConnectionSourceFlowValidationDetails $unknownConnectionSource
 * @property UnknownConnectionSourceOutputFlowValidationDetails $unknownConnectionSourceOutput
 * @property UnknownConnectionTargetFlowValidationDetails $unknownConnectionTarget
 * @property UnknownConnectionTargetInputFlowValidationDetails $unknownConnectionTargetInput
 * @property UnreachableNodeFlowValidationDetails $unreachableNode
 * @property UnsatisfiedConnectionConditionsFlowValidationDetails $unsatisfiedConnectionConditions
 * @property UnspecifiedFlowValidationDetails $unspecified
 */
class FlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     cyclicConnection?: CyclicConnectionFlowValidationDetails,
     *     duplicateConditionExpression?: DuplicateConditionExpressionFlowValidationDetails,
     *     duplicateConnections?: DuplicateConnectionsFlowValidationDetails,
     *     incompatibleConnectionDataType?: IncompatibleConnectionDataTypeFlowValidationDetails,
     *     malformedConditionExpression?: MalformedConditionExpressionFlowValidationDetails,
     *     malformedNodeInputExpression?: MalformedNodeInputExpressionFlowValidationDetails,
     *     mismatchedNodeInputType?: MismatchedNodeInputTypeFlowValidationDetails,
     *     mismatchedNodeOutputType?: MismatchedNodeOutputTypeFlowValidationDetails,
     *     missingConnectionConfiguration?: MissingConnectionConfigurationFlowValidationDetails,
     *     missingDefaultCondition?: MissingDefaultConditionFlowValidationDetails,
     *     missingEndingNodes?: MissingEndingNodesFlowValidationDetails,
     *     missingNodeConfiguration?: MissingNodeConfigurationFlowValidationDetails,
     *     missingNodeInput?: MissingNodeInputFlowValidationDetails,
     *     missingNodeOutput?: MissingNodeOutputFlowValidationDetails,
     *     missingStartingNodes?: MissingStartingNodesFlowValidationDetails,
     *     multipleNodeInputConnections?: MultipleNodeInputConnectionsFlowValidationDetails,
     *     unfulfilledNodeInput?: UnfulfilledNodeInputFlowValidationDetails,
     *     unknownConnectionCondition?: UnknownConnectionConditionFlowValidationDetails,
     *     unknownConnectionSource?: UnknownConnectionSourceFlowValidationDetails,
     *     unknownConnectionSourceOutput?: UnknownConnectionSourceOutputFlowValidationDetails,
     *     unknownConnectionTarget?: UnknownConnectionTargetFlowValidationDetails,
     *     unknownConnectionTargetInput?: UnknownConnectionTargetInputFlowValidationDetails,
     *     unreachableNode?: UnreachableNodeFlowValidationDetails,
     *     unsatisfiedConnectionConditions?: UnsatisfiedConnectionConditionsFlowValidationDetails,
     *     unspecified?: UnspecifiedFlowValidationDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
