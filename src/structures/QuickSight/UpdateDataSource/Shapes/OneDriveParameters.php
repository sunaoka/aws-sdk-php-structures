<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TenantId
 * @property string|null $ClientId
 * @property 'THREE_LEGGED_OAUTH'|'TWO_LEGGED_OAUTH'|'SERVICE_ACCOUNT'|null $AuthType
 */
class OneDriveParameters extends Shape
{
    /**
     * @param array{
     *     TenantId?: string|null,
     *     ClientId?: string|null,
     *     AuthType?: 'THREE_LEGGED_OAUTH'|'TWO_LEGGED_OAUTH'|'SERVICE_ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
