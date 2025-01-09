<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetDiscrepancyReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $testSetDiscrepancyReportId
 * @property string $testSetId
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property Shapes\TestSetDiscrepancyReportResourceTarget $target
 * @property 'InProgress'|'Completed'|'Failed' $testSetDiscrepancyReportStatus
 * @property \Aws\Api\DateTimeResult $lastUpdatedDataTime
 * @property Shapes\TestSetDiscrepancyErrors $testSetDiscrepancyTopErrors
 * @property string $testSetDiscrepancyRawOutputUrl
 * @property list<string> $failureReasons
 */
class DescribeTestSetDiscrepancyReportResponse extends Response
{
}
