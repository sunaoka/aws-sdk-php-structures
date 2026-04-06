<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LakeFormationConfiguration|null $lakeFormationConfiguration
 * @property EncryptionConfiguration|null $encryptionConfiguration
 */
class AuthorizationConfiguration extends Shape
{
    /**
     * @param array{
     *     lakeFormationConfiguration?: LakeFormationConfiguration|null,
     *     encryptionConfiguration?: EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
