<?php

namespace Sunaoka\Aws\Structures\SesV2\GetTenant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TenantName
 * @property string|null $TenantId
 * @property string|null $TenantArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property list<Tag>|null $Tags
 * @property 'ENABLED'|'REINSTATED'|'DISABLED'|null $SendingStatus
 */
class Tenant extends Shape
{
    /**
     * @param array{
     *     TenantName?: string|null,
     *     TenantId?: string|null,
     *     TenantArn?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null,
     *     SendingStatus?: 'ENABLED'|'REINSTATED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
