<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SharePointDomain
 * @property string|null $TenantId
 * @property string|null $ClientId
 * @property 'THREE_LEGGED_OAUTH'|'TWO_LEGGED_OAUTH'|'SERVICE_ACCOUNT'|null $AuthType
 */
class SharePointParameters extends Shape
{
    /**
     * @param array{
     *     SharePointDomain: string,
     *     TenantId?: string|null,
     *     ClientId?: string|null,
     *     AuthType?: 'THREE_LEGGED_OAUTH'|'TWO_LEGGED_OAUTH'|'SERVICE_ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
