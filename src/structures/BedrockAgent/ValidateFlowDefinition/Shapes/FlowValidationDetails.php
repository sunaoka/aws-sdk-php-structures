<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CyclicConnectionFlowValidationDetails|null $cyclicConnection
 * @property DuplicateConditionExpressionFlowValidationDetails|null $duplicateConditionExpression
 * @property DuplicateConnectionsFlowValidationDetails|null $duplicateConnections
 * @property IncompatibleConnectionDataTypeFlowValidationDetails|null $incompatibleConnectionDataType
 * @property MalformedConditionExpressionFlowValidationDetails|null $malformedConditionExpression
 * @property MalformedNodeInputExpressionFlowValidationDetails|null $malformedNodeInputExpression
 * @property MismatchedNodeInputTypeFlowValidationDetails|null $mismatchedNodeInputType
 * @property MismatchedNodeOutputTypeFlowValidationDetails|null $mismatchedNodeOutputType
 * @property MissingConnectionConfigurationFlowValidationDetails|null $missingConnectionConfiguration
 * @property MissingDefaultConditionFlowValidationDetails|null $missingDefaultCondition
 * @property MissingEndingNodesFlowValidationDetails|null $missingEndingNodes
 * @property MissingNodeConfigurationFlowValidationDetails|null $missingNodeConfiguration
 * @property MissingNodeInputFlowValidationDetails|null $missingNodeInput
 * @property MissingNodeOutputFlowValidationDetails|null $missingNodeOutput
 * @property MissingStartingNodesFlowValidationDetails|null $missingStartingNodes
 * @property MultipleNodeInputConnectionsFlowValidationDetails|null $multipleNodeInputConnections
 * @property UnfulfilledNodeInputFlowValidationDetails|null $unfulfilledNodeInput
 * @property UnknownConnectionConditionFlowValidationDetails|null $unknownConnectionCondition
 * @property UnknownConnectionSourceFlowValidationDetails|null $unknownConnectionSource
 * @property UnknownConnectionSourceOutputFlowValidationDetails|null $unknownConnectionSourceOutput
 * @property UnknownConnectionTargetFlowValidationDetails|null $unknownConnectionTarget
 * @property UnknownConnectionTargetInputFlowValidationDetails|null $unknownConnectionTargetInput
 * @property UnreachableNodeFlowValidationDetails|null $unreachableNode
 * @property UnsatisfiedConnectionConditionsFlowValidationDetails|null $unsatisfiedConnectionConditions
 * @property UnspecifiedFlowValidationDetails|null $unspecified
 */
class FlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     cyclicConnection?: CyclicConnectionFlowValidationDetails|null,
     *     duplicateConditionExpression?: DuplicateConditionExpressionFlowValidationDetails|null,
     *     duplicateConnections?: DuplicateConnectionsFlowValidationDetails|null,
     *     incompatibleConnectionDataType?: IncompatibleConnectionDataTypeFlowValidationDetails|null,
     *     malformedConditionExpression?: MalformedConditionExpressionFlowValidationDetails|null,
     *     malformedNodeInputExpression?: MalformedNodeInputExpressionFlowValidationDetails|null,
     *     mismatchedNodeInputType?: MismatchedNodeInputTypeFlowValidationDetails|null,
     *     mismatchedNodeOutputType?: MismatchedNodeOutputTypeFlowValidationDetails|null,
     *     missingConnectionConfiguration?: MissingConnectionConfigurationFlowValidationDetails|null,
     *     missingDefaultCondition?: MissingDefaultConditionFlowValidationDetails|null,
     *     missingEndingNodes?: MissingEndingNodesFlowValidationDetails|null,
     *     missingNodeConfiguration?: MissingNodeConfigurationFlowValidationDetails|null,
     *     missingNodeInput?: MissingNodeInputFlowValidationDetails|null,
     *     missingNodeOutput?: MissingNodeOutputFlowValidationDetails|null,
     *     missingStartingNodes?: MissingStartingNodesFlowValidationDetails|null,
     *     multipleNodeInputConnections?: MultipleNodeInputConnectionsFlowValidationDetails|null,
     *     unfulfilledNodeInput?: UnfulfilledNodeInputFlowValidationDetails|null,
     *     unknownConnectionCondition?: UnknownConnectionConditionFlowValidationDetails|null,
     *     unknownConnectionSource?: UnknownConnectionSourceFlowValidationDetails|null,
     *     unknownConnectionSourceOutput?: UnknownConnectionSourceOutputFlowValidationDetails|null,
     *     unknownConnectionTarget?: UnknownConnectionTargetFlowValidationDetails|null,
     *     unknownConnectionTargetInput?: UnknownConnectionTargetInputFlowValidationDetails|null,
     *     unreachableNode?: UnreachableNodeFlowValidationDetails|null,
     *     unsatisfiedConnectionConditions?: UnsatisfiedConnectionConditionsFlowValidationDetails|null,
     *     unspecified?: UnspecifiedFlowValidationDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
