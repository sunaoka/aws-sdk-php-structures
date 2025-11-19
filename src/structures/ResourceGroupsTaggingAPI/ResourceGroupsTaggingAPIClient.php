<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI;

class ResourceGroupsTaggingAPIClient extends \Aws\ResourceGroupsTaggingAPI\ResourceGroupsTaggingAPIClient
{
    use DescribeReportCreation\DescribeReportCreationTrait;
    use GetComplianceSummary\GetComplianceSummaryTrait;
    use GetResources\GetResourcesTrait;
    use GetTagKeys\GetTagKeysTrait;
    use GetTagValues\GetTagValuesTrait;
    use ListRequiredTags\ListRequiredTagsTrait;
    use StartReportCreation\StartReportCreationTrait;
    use TagResources\TagResourcesTrait;
    use UntagResources\UntagResourcesTrait;
}
