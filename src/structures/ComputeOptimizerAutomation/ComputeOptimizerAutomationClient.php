<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation;

class ComputeOptimizerAutomationClient extends \Aws\ComputeOptimizerAutomation\ComputeOptimizerAutomationClient
{
    use AssociateAccounts\AssociateAccountsTrait;
    use CreateAutomationRule\CreateAutomationRuleTrait;
    use DeleteAutomationRule\DeleteAutomationRuleTrait;
    use DisassociateAccounts\DisassociateAccountsTrait;
    use GetAutomationEvent\GetAutomationEventTrait;
    use GetAutomationRule\GetAutomationRuleTrait;
    use GetEnrollmentConfiguration\GetEnrollmentConfigurationTrait;
    use ListAccounts\ListAccountsTrait;
    use ListAutomationEventSteps\ListAutomationEventStepsTrait;
    use ListAutomationEventSummaries\ListAutomationEventSummariesTrait;
    use ListAutomationEvents\ListAutomationEventsTrait;
    use ListAutomationRulePreview\ListAutomationRulePreviewTrait;
    use ListAutomationRulePreviewSummaries\ListAutomationRulePreviewSummariesTrait;
    use ListAutomationRules\ListAutomationRulesTrait;
    use ListRecommendedActionSummaries\ListRecommendedActionSummariesTrait;
    use ListRecommendedActions\ListRecommendedActionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RollbackAutomationEvent\RollbackAutomationEventTrait;
    use StartAutomationEvent\StartAutomationEventTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAutomationRule\UpdateAutomationRuleTrait;
    use UpdateEnrollmentConfiguration\UpdateEnrollmentConfigurationTrait;
}
