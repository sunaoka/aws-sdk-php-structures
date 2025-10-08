<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyAnnotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyAddTypeAnnotation|null $addType
 * @property AutomatedReasoningPolicyUpdateTypeAnnotation|null $updateType
 * @property AutomatedReasoningPolicyDeleteTypeAnnotation|null $deleteType
 * @property AutomatedReasoningPolicyAddVariableAnnotation|null $addVariable
 * @property AutomatedReasoningPolicyUpdateVariableAnnotation|null $updateVariable
 * @property AutomatedReasoningPolicyDeleteVariableAnnotation|null $deleteVariable
 * @property AutomatedReasoningPolicyAddRuleAnnotation|null $addRule
 * @property AutomatedReasoningPolicyUpdateRuleAnnotation|null $updateRule
 * @property AutomatedReasoningPolicyDeleteRuleAnnotation|null $deleteRule
 * @property AutomatedReasoningPolicyAddRuleFromNaturalLanguageAnnotation|null $addRuleFromNaturalLanguage
 * @property AutomatedReasoningPolicyUpdateFromRuleFeedbackAnnotation|null $updateFromRulesFeedback
 * @property AutomatedReasoningPolicyUpdateFromScenarioFeedbackAnnotation|null $updateFromScenarioFeedback
 * @property AutomatedReasoningPolicyIngestContentAnnotation|null $ingestContent
 */
class AutomatedReasoningPolicyAnnotation extends Shape
{
    /**
     * @param array{
     *     addType?: AutomatedReasoningPolicyAddTypeAnnotation|null,
     *     updateType?: AutomatedReasoningPolicyUpdateTypeAnnotation|null,
     *     deleteType?: AutomatedReasoningPolicyDeleteTypeAnnotation|null,
     *     addVariable?: AutomatedReasoningPolicyAddVariableAnnotation|null,
     *     updateVariable?: AutomatedReasoningPolicyUpdateVariableAnnotation|null,
     *     deleteVariable?: AutomatedReasoningPolicyDeleteVariableAnnotation|null,
     *     addRule?: AutomatedReasoningPolicyAddRuleAnnotation|null,
     *     updateRule?: AutomatedReasoningPolicyUpdateRuleAnnotation|null,
     *     deleteRule?: AutomatedReasoningPolicyDeleteRuleAnnotation|null,
     *     addRuleFromNaturalLanguage?: AutomatedReasoningPolicyAddRuleFromNaturalLanguageAnnotation|null,
     *     updateFromRulesFeedback?: AutomatedReasoningPolicyUpdateFromRuleFeedbackAnnotation|null,
     *     updateFromScenarioFeedback?: AutomatedReasoningPolicyUpdateFromScenarioFeedbackAnnotation|null,
     *     ingestContent?: AutomatedReasoningPolicyIngestContentAnnotation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
