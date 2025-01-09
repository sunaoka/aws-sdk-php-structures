<?php

namespace Sunaoka\Aws\Structures\Deadline\ListMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $monitorId
 * @property string $displayName
 * @property string $subdomain
 * @property string $url
 * @property string $roleArn
 * @property string $identityCenterInstanceArn
 * @property string $identityCenterApplicationArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class MonitorSummary extends Shape
{
    /**
     * @param array{
     *     monitorId: string,
     *     displayName: string,
     *     subdomain: string,
     *     url: string,
     *     roleArn: string,
     *     identityCenterInstanceArn: string,
     *     identityCenterApplicationArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
