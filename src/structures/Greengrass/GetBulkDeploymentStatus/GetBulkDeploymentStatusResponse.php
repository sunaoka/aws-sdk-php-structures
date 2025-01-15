<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetBulkDeploymentStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\BulkDeploymentMetrics|null $BulkDeploymentMetrics
 * @property 'Initializing'|'Running'|'Completed'|'Stopping'|'Stopped'|'Failed'|null $BulkDeploymentStatus
 * @property string|null $CreatedAt
 * @property list<Shapes\ErrorDetail>|null $ErrorDetails
 * @property string|null $ErrorMessage
 * @property array<string, string>|null $tags
 */
class GetBulkDeploymentStatusResponse extends Response
{
}
