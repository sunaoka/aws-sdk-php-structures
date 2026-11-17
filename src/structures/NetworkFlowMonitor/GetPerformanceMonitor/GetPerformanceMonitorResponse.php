<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetPerformanceMonitor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $monitorArn
 * @property string $monitorName
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $monitorStatus
 * @property 'VPC' $monitorType
 * @property list<Shapes\PerformanceMonitorTarget> $targets
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property array<string, string>|null $tags
 */
class GetPerformanceMonitorResponse extends Response
{
}
