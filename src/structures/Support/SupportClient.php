<?php

namespace Sunaoka\Aws\Structures\Support;

class SupportClient extends \Aws\Support\SupportClient
{
    use AddAttachmentsToSet\AddAttachmentsToSetTrait;
    use AddCommunicationToCase\AddCommunicationToCaseTrait;
    use CreateCase\CreateCaseTrait;
    use DescribeAttachment\DescribeAttachmentTrait;
    use DescribeCases\DescribeCasesTrait;
    use DescribeCommunications\DescribeCommunicationsTrait;
    use DescribeCreateCaseOptions\DescribeCreateCaseOptionsTrait;
    use DescribeServices\DescribeServicesTrait;
    use DescribeSeverityLevels\DescribeSeverityLevelsTrait;
    use DescribeSupportedLanguages\DescribeSupportedLanguagesTrait;
    use DescribeTrustedAdvisorCheckRefreshStatuses\DescribeTrustedAdvisorCheckRefreshStatusesTrait;
    use DescribeTrustedAdvisorCheckResult\DescribeTrustedAdvisorCheckResultTrait;
    use DescribeTrustedAdvisorCheckSummaries\DescribeTrustedAdvisorCheckSummariesTrait;
    use DescribeTrustedAdvisorChecks\DescribeTrustedAdvisorChecksTrait;
    use RefreshTrustedAdvisorCheck\RefreshTrustedAdvisorCheckTrait;
    use ResolveCase\ResolveCaseTrait;
}
