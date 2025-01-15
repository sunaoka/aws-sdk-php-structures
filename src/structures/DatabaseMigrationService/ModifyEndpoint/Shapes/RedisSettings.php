<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerName
 * @property int $Port
 * @property 'plaintext'|'ssl-encryption'|null $SslSecurityProtocol
 * @property 'none'|'auth-role'|'auth-token'|null $AuthType
 * @property string|null $AuthUserName
 * @property string|null $AuthPassword
 * @property string|null $SslCaCertificateArn
 */
class RedisSettings extends Shape
{
    /**
     * @param array{
     *     ServerName: string,
     *     Port: int,
     *     SslSecurityProtocol?: 'plaintext'|'ssl-encryption'|null,
     *     AuthType?: 'none'|'auth-role'|'auth-token'|null,
     *     AuthUserName?: string|null,
     *     AuthPassword?: string|null,
     *     SslCaCertificateArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
