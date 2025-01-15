<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $authorizedSessionTagValue
 * @property SecureNamespaceInfo|null $secureNamespaceInfo
 * @property string|null $queryEngineRoleArn
 */
class LakeFormationConfiguration extends Shape
{
    /**
     * @param array{
     *     authorizedSessionTagValue?: string|null,
     *     secureNamespaceInfo?: SecureNamespaceInfo|null,
     *     queryEngineRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
