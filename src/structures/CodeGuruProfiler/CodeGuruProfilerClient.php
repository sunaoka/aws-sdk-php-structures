<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler;

class CodeGuruProfilerClient extends \Aws\CodeGuruProfiler\CodeGuruProfilerClient
{
    use AddNotificationChannels\AddNotificationChannelsTrait;
    use BatchGetFrameMetricData\BatchGetFrameMetricDataTrait;
    use ConfigureAgent\ConfigureAgentTrait;
    use CreateProfilingGroup\CreateProfilingGroupTrait;
    use DeleteProfilingGroup\DeleteProfilingGroupTrait;
    use DescribeProfilingGroup\DescribeProfilingGroupTrait;
    use GetFindingsReportAccountSummary\GetFindingsReportAccountSummaryTrait;
    use GetNotificationConfiguration\GetNotificationConfigurationTrait;
    use GetPolicy\GetPolicyTrait;
    use GetProfile\GetProfileTrait;
    use GetRecommendations\GetRecommendationsTrait;
    use ListFindingsReports\ListFindingsReportsTrait;
    use ListProfileTimes\ListProfileTimesTrait;
    use ListProfilingGroups\ListProfilingGroupsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PostAgentProfile\PostAgentProfileTrait;
    use PutPermission\PutPermissionTrait;
    use RemoveNotificationChannel\RemoveNotificationChannelTrait;
    use RemovePermission\RemovePermissionTrait;
    use SubmitFeedback\SubmitFeedbackTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateProfilingGroup\UpdateProfilingGroupTrait;
}
