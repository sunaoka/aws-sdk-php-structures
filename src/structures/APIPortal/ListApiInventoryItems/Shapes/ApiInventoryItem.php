<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListApiInventoryItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GET'|'POST'|'PUT'|'DELETE'|'PATCH'|'ANY'|'HEAD'|'OPTIONS' $method
 * @property string $host
 * @property int $port
 * @property string $path
 * @property string $accountId
 * @property string $resourceArn
 * @property string $region
 * @property 'API_GATEWAY'|'ELB'|'CLOUDFRONT' $discoverySource
 * @property \Aws\Api\DateTimeResult|null $firstSeen
 * @property \Aws\Api\DateTimeResult|null $lastSeen
 * @property 'PUBLIC'|'PRIVATE'|null $visibility
 * @property 'ENABLED'|'DISABLED'|null $wafStatus
 * @property 'SHADOW'|'MANAGED'|'MANAGED_ZOMBIE'|'MANAGED_ORPHANED'|null $classification
 * @property 'SELF'|'ORGANIZATION'|null $managedBy
 * @property list<'MCP'|'LLM'|'A2A'>|null $workloads
 */
class ApiInventoryItem extends Shape
{
    /**
     * @param array{
     *     method: 'GET'|'POST'|'PUT'|'DELETE'|'PATCH'|'ANY'|'HEAD'|'OPTIONS',
     *     host: string,
     *     port: int,
     *     path: string,
     *     accountId: string,
     *     resourceArn: string,
     *     region: string,
     *     discoverySource: 'API_GATEWAY'|'ELB'|'CLOUDFRONT',
     *     firstSeen?: \Aws\Api\DateTimeResult|null,
     *     lastSeen?: \Aws\Api\DateTimeResult|null,
     *     visibility?: 'PUBLIC'|'PRIVATE'|null,
     *     wafStatus?: 'ENABLED'|'DISABLED'|null,
     *     classification?: 'SHADOW'|'MANAGED'|'MANAGED_ZOMBIE'|'MANAGED_ORPHANED'|null,
     *     managedBy?: 'SELF'|'ORGANIZATION'|null,
     *     workloads?: list<'MCP'|'LLM'|'A2A'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
