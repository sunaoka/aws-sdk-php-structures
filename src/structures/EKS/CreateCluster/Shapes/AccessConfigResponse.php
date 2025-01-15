<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $bootstrapClusterCreatorAdminPermissions
 * @property 'API'|'API_AND_CONFIG_MAP'|'CONFIG_MAP'|null $authenticationMode
 */
class AccessConfigResponse extends Shape
{
    /**
     * @param array{
     *     bootstrapClusterCreatorAdminPermissions?: bool|null,
     *     authenticationMode?: 'API'|'API_AND_CONFIG_MAP'|'CONFIG_MAP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
