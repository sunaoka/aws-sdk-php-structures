<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartMetricsExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $metricsExportId
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $status
 */
class StartMetricsExportResponse extends Response
{
}
