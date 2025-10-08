<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\GetDashboard;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property string|null $description
 * @property 'CUSTOM' $type
 * @property list<Shapes\Widget> $widgets
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetDashboardResponse extends Response
{
}
