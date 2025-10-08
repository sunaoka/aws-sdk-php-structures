<?php

namespace Sunaoka\Aws\Structures\Inspector;

class InspectorClient extends \Aws\Inspector\InspectorClient
{
    use AddAttributesToFindings\AddAttributesToFindingsTrait;
    use CreateAssessmentTarget\CreateAssessmentTargetTrait;
    use CreateAssessmentTemplate\CreateAssessmentTemplateTrait;
    use CreateExclusionsPreview\CreateExclusionsPreviewTrait;
    use CreateResourceGroup\CreateResourceGroupTrait;
    use DeleteAssessmentRun\DeleteAssessmentRunTrait;
    use DeleteAssessmentTarget\DeleteAssessmentTargetTrait;
    use DeleteAssessmentTemplate\DeleteAssessmentTemplateTrait;
    use DescribeAssessmentRuns\DescribeAssessmentRunsTrait;
    use DescribeAssessmentTargets\DescribeAssessmentTargetsTrait;
    use DescribeAssessmentTemplates\DescribeAssessmentTemplatesTrait;
    use DescribeCrossAccountAccessRole\DescribeCrossAccountAccessRoleTrait;
    use DescribeExclusions\DescribeExclusionsTrait;
    use DescribeFindings\DescribeFindingsTrait;
    use DescribeResourceGroups\DescribeResourceGroupsTrait;
    use DescribeRulesPackages\DescribeRulesPackagesTrait;
    use GetAssessmentReport\GetAssessmentReportTrait;
    use GetExclusionsPreview\GetExclusionsPreviewTrait;
    use GetTelemetryMetadata\GetTelemetryMetadataTrait;
    use ListAssessmentRunAgents\ListAssessmentRunAgentsTrait;
    use ListAssessmentRuns\ListAssessmentRunsTrait;
    use ListAssessmentTargets\ListAssessmentTargetsTrait;
    use ListAssessmentTemplates\ListAssessmentTemplatesTrait;
    use ListEventSubscriptions\ListEventSubscriptionsTrait;
    use ListExclusions\ListExclusionsTrait;
    use ListFindings\ListFindingsTrait;
    use ListRulesPackages\ListRulesPackagesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PreviewAgents\PreviewAgentsTrait;
    use RegisterCrossAccountAccessRole\RegisterCrossAccountAccessRoleTrait;
    use RemoveAttributesFromFindings\RemoveAttributesFromFindingsTrait;
    use SetTagsForResource\SetTagsForResourceTrait;
    use StartAssessmentRun\StartAssessmentRunTrait;
    use StopAssessmentRun\StopAssessmentRunTrait;
    use SubscribeToEvent\SubscribeToEventTrait;
    use UnsubscribeFromEvent\UnsubscribeFromEventTrait;
    use UpdateAssessmentTarget\UpdateAssessmentTargetTrait;
}
