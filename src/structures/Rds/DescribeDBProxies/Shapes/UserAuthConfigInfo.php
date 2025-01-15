<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $UserName
 * @property 'SECRETS'|null $AuthScheme
 * @property string|null $SecretArn
 * @property 'DISABLED'|'REQUIRED'|'ENABLED'|null $IAMAuth
 * @property 'MYSQL_NATIVE_PASSWORD'|'MYSQL_CACHING_SHA2_PASSWORD'|'POSTGRES_SCRAM_SHA_256'|'POSTGRES_MD5'|'SQL_SERVER_AUTHENTICATION'|null $ClientPasswordAuthType
 */
class UserAuthConfigInfo extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     UserName?: string|null,
     *     AuthScheme?: 'SECRETS'|null,
     *     SecretArn?: string|null,
     *     IAMAuth?: 'DISABLED'|'REQUIRED'|'ENABLED'|null,
     *     ClientPasswordAuthType?: 'MYSQL_NATIVE_PASSWORD'|'MYSQL_CACHING_SHA2_PASSWORD'|'POSTGRES_SCRAM_SHA_256'|'POSTGRES_MD5'|'SQL_SERVER_AUTHENTICATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
