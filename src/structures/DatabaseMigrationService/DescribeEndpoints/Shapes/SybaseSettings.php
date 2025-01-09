<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property string $Password
 * @property int $Port
 * @property string $ServerName
 * @property string $Username
 * @property string $SecretsManagerAccessRoleArn
 * @property string $SecretsManagerSecretId
 */
class SybaseSettings extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string,
     *     Password?: string,
     *     Port?: int,
     *     ServerName?: string,
     *     Username?: string,
     *     SecretsManagerAccessRoleArn?: string,
     *     SecretsManagerSecretId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
