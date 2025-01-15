<?php

namespace Sunaoka\Aws\Structures\Ec2\GetDeclarativePoliciesReportSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReportId
 * @property string|null $S3Bucket
 * @property string|null $S3Prefix
 * @property string|null $TargetId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int|null $NumberOfAccounts
 * @property int|null $NumberOfFailedAccounts
 * @property list<Shapes\AttributeSummary>|null $AttributeSummaries
 */
class GetDeclarativePoliciesReportSummaryResponse extends Response
{
}
