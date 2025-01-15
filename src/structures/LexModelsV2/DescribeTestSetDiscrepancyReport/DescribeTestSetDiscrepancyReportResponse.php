<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetDiscrepancyReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $testSetDiscrepancyReportId
 * @property string|null $testSetId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property Shapes\TestSetDiscrepancyReportResourceTarget|null $target
 * @property 'InProgress'|'Completed'|'Failed'|null $testSetDiscrepancyReportStatus
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDataTime
 * @property Shapes\TestSetDiscrepancyErrors|null $testSetDiscrepancyTopErrors
 * @property string|null $testSetDiscrepancyRawOutputUrl
 * @property list<string>|null $failureReasons
 */
class DescribeTestSetDiscrepancyReportResponse extends Response
{
}
