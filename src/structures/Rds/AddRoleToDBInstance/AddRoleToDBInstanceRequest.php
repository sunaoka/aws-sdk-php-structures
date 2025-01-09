<?php

namespace Sunaoka\Aws\Structures\Rds\AddRoleToDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $RoleArn
 * @property string $FeatureName
 */
class AddRoleToDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     RoleArn: string,
     *     FeatureName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
