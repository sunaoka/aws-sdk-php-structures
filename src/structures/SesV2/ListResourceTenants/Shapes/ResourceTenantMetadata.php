<?php

namespace Sunaoka\Aws\Structures\SesV2\ListResourceTenants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TenantName
 * @property string|null $TenantId
 * @property string|null $ResourceArn
 * @property \Aws\Api\DateTimeResult|null $AssociatedTimestamp
 */
class ResourceTenantMetadata extends Shape
{
    /**
     * @param array{
     *     TenantName?: string|null,
     *     TenantId?: string|null,
     *     ResourceArn?: string|null,
     *     AssociatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
