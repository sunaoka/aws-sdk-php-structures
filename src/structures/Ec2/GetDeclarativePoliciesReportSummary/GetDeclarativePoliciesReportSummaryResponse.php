<?php

namespace Sunaoka\Aws\Structures\Ec2\GetDeclarativePoliciesReportSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReportId
 * @property string $S3Bucket
 * @property string $S3Prefix
 * @property string $TargetId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $NumberOfAccounts
 * @property int $NumberOfFailedAccounts
 * @property list<Shapes\AttributeSummary> $AttributeSummaries
 */
class GetDeclarativePoliciesReportSummaryResponse extends Response
{
}
