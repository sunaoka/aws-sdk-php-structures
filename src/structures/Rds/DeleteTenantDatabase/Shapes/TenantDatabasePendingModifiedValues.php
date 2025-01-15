<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteTenantDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MasterUserPassword
 * @property string|null $TenantDBName
 */
class TenantDatabasePendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     MasterUserPassword?: string|null,
     *     TenantDBName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
