<?php

namespace Sunaoka\Aws\Structures\Rds\RemoveRoleFromDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $RoleArn
 * @property string $FeatureName
 */
class RemoveRoleFromDBInstanceRequest extends Request
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
