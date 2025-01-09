<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizedSessionTagValue
 * @property SecureNamespaceInfo $secureNamespaceInfo
 * @property string $queryEngineRoleArn
 */
class LakeFormationConfiguration extends Shape
{
    /**
     * @param array{
     *     authorizedSessionTagValue?: string,
     *     secureNamespaceInfo?: SecureNamespaceInfo,
     *     queryEngineRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
