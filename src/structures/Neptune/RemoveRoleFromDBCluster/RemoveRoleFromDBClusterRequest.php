<?php

namespace Sunaoka\Aws\Structures\Neptune\RemoveRoleFromDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $RoleArn
 * @property string $FeatureName
 */
class RemoveRoleFromDBClusterRequest extends Request
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
