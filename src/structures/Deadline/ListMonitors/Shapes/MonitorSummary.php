<?php

namespace Sunaoka\Aws\Structures\Deadline\ListMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $displayName
 * @property string $identityCenterApplicationArn
 * @property string $identityCenterInstanceArn
 * @property string $monitorId
 * @property string $roleArn
 * @property string $subdomain
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string $url
 */
class MonitorSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     displayName: string,
     *     identityCenterApplicationArn: string,
     *     identityCenterInstanceArn: string,
     *     monitorId: string,
     *     roleArn: string,
     *     subdomain: string,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     url: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
