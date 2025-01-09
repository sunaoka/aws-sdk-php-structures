<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerName
 * @property int $Port
 * @property 'plaintext'|'ssl-encryption' $SslSecurityProtocol
 * @property 'none'|'auth-role'|'auth-token' $AuthType
 * @property string $AuthUserName
 * @property string $AuthPassword
 * @property string $SslCaCertificateArn
 */
class RedisSettings extends Shape
{
    /**
     * @param array{
     *     ServerName: string,
     *     Port: int,
     *     SslSecurityProtocol?: 'plaintext'|'ssl-encryption',
     *     AuthType?: 'none'|'auth-role'|'auth-token',
     *     AuthUserName?: string,
     *     AuthPassword?: string,
     *     SslCaCertificateArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
