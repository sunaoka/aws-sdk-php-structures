<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\ListScheduledReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEALTHY'|'UNHEALTHY' $statusCode
 * @property \Aws\Api\DateTimeResult|null $lastRefreshedAt
 * @property list<'DATA_SOURCE_ACCESS_DENIED'|'EXECUTION_ROLE_ASSUME_FAILED'|'EXECUTION_ROLE_INSUFFICIENT_PERMISSIONS'|'DASHBOARD_NOT_FOUND'|'DASHBOARD_ACCESS_DENIED'|'INTERNAL_FAILURE'|'WIDGET_ID_NOT_FOUND'>|null $statusReasons
 */
class HealthStatus extends Shape
{
    /**
     * @param array{
     *     statusCode: 'HEALTHY'|'UNHEALTHY',
     *     lastRefreshedAt?: \Aws\Api\DateTimeResult|null,
     *     statusReasons?: list<'DATA_SOURCE_ACCESS_DENIED'|'EXECUTION_ROLE_ASSUME_FAILED'|'EXECUTION_ROLE_INSUFFICIENT_PERMISSIONS'|'DASHBOARD_NOT_FOUND'|'DASHBOARD_ACCESS_DENIED'|'INTERNAL_FAILURE'|'WIDGET_ID_NOT_FOUND'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
