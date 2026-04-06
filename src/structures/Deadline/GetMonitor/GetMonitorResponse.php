<?php

namespace Sunaoka\Aws\Structures\Deadline\GetMonitor;

use Sunaoka\Aws\Structures\Response;

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
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetMonitorResponse extends Response
{
}
