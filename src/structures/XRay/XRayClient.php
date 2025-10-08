<?php

namespace Sunaoka\Aws\Structures\XRay;

class XRayClient extends \Aws\XRay\XRayClient
{
    use BatchGetTraces\BatchGetTracesTrait;
    use CancelTraceRetrieval\CancelTraceRetrievalTrait;
    use CreateGroup\CreateGroupTrait;
    use CreateSamplingRule\CreateSamplingRuleTrait;
    use DeleteGroup\DeleteGroupTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteSamplingRule\DeleteSamplingRuleTrait;
    use GetEncryptionConfig\GetEncryptionConfigTrait;
    use GetGroup\GetGroupTrait;
    use GetGroups\GetGroupsTrait;
    use GetIndexingRules\GetIndexingRulesTrait;
    use GetInsight\GetInsightTrait;
    use GetInsightEvents\GetInsightEventsTrait;
    use GetInsightImpactGraph\GetInsightImpactGraphTrait;
    use GetInsightSummaries\GetInsightSummariesTrait;
    use GetRetrievedTracesGraph\GetRetrievedTracesGraphTrait;
    use GetSamplingRules\GetSamplingRulesTrait;
    use GetSamplingStatisticSummaries\GetSamplingStatisticSummariesTrait;
    use GetSamplingTargets\GetSamplingTargetsTrait;
    use GetServiceGraph\GetServiceGraphTrait;
    use GetTimeSeriesServiceStatistics\GetTimeSeriesServiceStatisticsTrait;
    use GetTraceGraph\GetTraceGraphTrait;
    use GetTraceSegmentDestination\GetTraceSegmentDestinationTrait;
    use GetTraceSummaries\GetTraceSummariesTrait;
    use ListResourcePolicies\ListResourcePoliciesTrait;
    use ListRetrievedTraces\ListRetrievedTracesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutEncryptionConfig\PutEncryptionConfigTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use PutTelemetryRecords\PutTelemetryRecordsTrait;
    use PutTraceSegments\PutTraceSegmentsTrait;
    use StartTraceRetrieval\StartTraceRetrievalTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateGroup\UpdateGroupTrait;
    use UpdateIndexingRule\UpdateIndexingRuleTrait;
    use UpdateSamplingRule\UpdateSamplingRuleTrait;
    use UpdateTraceSegmentDestination\UpdateTraceSegmentDestinationTrait;
}
