<?php

namespace Sunaoka\Aws\Structures\SesV2\ListTenants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TenantName
 * @property string|null $TenantId
 * @property string|null $TenantArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 */
class TenantInfo extends Shape
{
    /**
     * @param array{
     *     TenantName?: string|null,
     *     TenantId?: string|null,
     *     TenantArn?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
