<?php

namespace Sunaoka\Aws\Structures\Rds\RemoveRoleFromDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $RoleArn
 * @property string|null $FeatureName
 */
class RemoveRoleFromDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     RoleArn: string,
     *     FeatureName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
