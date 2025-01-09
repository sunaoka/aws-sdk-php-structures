<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetBulkDeploymentStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\BulkDeploymentMetrics $BulkDeploymentMetrics
 * @property 'Initializing'|'Running'|'Completed'|'Stopping'|'Stopped'|'Failed' $BulkDeploymentStatus
 * @property string $CreatedAt
 * @property list<Shapes\ErrorDetail> $ErrorDetails
 * @property string $ErrorMessage
 * @property array<string, string> $tags
 */
class GetBulkDeploymentStatusResponse extends Response
{
}
