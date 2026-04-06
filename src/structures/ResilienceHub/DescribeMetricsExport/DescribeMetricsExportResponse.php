<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeMetricsExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $errorMessage
 * @property Shapes\S3Location|null $exportLocation
 * @property string $metricsExportId
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $status
 */
class DescribeMetricsExportResponse extends Response
{
}
