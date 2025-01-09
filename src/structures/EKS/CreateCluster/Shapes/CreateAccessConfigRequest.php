<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $bootstrapClusterCreatorAdminPermissions
 * @property 'API'|'API_AND_CONFIG_MAP'|'CONFIG_MAP' $authenticationMode
 */
class CreateAccessConfigRequest extends Shape
{
    /**
     * @param array{
     *     bootstrapClusterCreatorAdminPermissions?: bool,
     *     authenticationMode?: 'API'|'API_AND_CONFIG_MAP'|'CONFIG_MAP'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
