<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LakeFormationConfiguration $lakeFormationConfiguration
 * @property EncryptionConfiguration $encryptionConfiguration
 */
class AuthorizationConfiguration extends Shape
{
    /**
     * @param array{
     *     lakeFormationConfiguration?: LakeFormationConfiguration,
     *     encryptionConfiguration?: EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
