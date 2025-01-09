<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteTenantDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MasterUserPassword
 * @property string $TenantDBName
 */
class TenantDatabasePendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     MasterUserPassword?: string,
     *     TenantDBName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
