<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseName
 * @property string|null $Password
 * @property int|null $Port
 * @property string|null $ServerName
 * @property string|null $Username
 * @property string|null $SecretsManagerAccessRoleArn
 * @property string|null $SecretsManagerSecretId
 */
class SybaseSettings extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string|null,
     *     Password?: string|null,
     *     Port?: int|null,
     *     ServerName?: string|null,
     *     Username?: string|null,
     *     SecretsManagerAccessRoleArn?: string|null,
     *     SecretsManagerSecretId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
