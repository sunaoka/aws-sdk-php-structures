<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity;

class CodeGuruSecurityClient extends \Aws\CodeGuruSecurity\CodeGuruSecurityClient
{
    use BatchGetFindings\BatchGetFindingsTrait;
    use CreateScan\CreateScanTrait;
    use CreateUploadUrl\CreateUploadUrlTrait;
    use GetAccountConfiguration\GetAccountConfigurationTrait;
    use GetFindings\GetFindingsTrait;
    use GetMetricsSummary\GetMetricsSummaryTrait;
    use GetScan\GetScanTrait;
    use ListFindingsMetrics\ListFindingsMetricsTrait;
    use ListScans\ListScansTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAccountConfiguration\UpdateAccountConfigurationTrait;
}
