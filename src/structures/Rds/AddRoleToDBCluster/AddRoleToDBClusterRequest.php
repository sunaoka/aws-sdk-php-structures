<?php

namespace Sunaoka\Aws\Structures\Rds\AddRoleToDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $RoleArn
 * @property string $FeatureName
 */
class AddRoleToDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     RoleArn: string,
     *     FeatureName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
