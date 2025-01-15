<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyTenantDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $TenantDBName
 * @property string|null $MasterUserPassword
 * @property string|null $NewTenantDBName
 */
class ModifyTenantDatabaseRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     TenantDBName: string,
     *     MasterUserPassword?: string|null,
     *     NewTenantDBName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
