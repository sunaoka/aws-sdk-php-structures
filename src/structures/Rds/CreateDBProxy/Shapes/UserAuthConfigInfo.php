<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $UserName
 * @property 'SECRETS' $AuthScheme
 * @property string $SecretArn
 * @property 'DISABLED'|'REQUIRED'|'ENABLED' $IAMAuth
 * @property 'MYSQL_NATIVE_PASSWORD'|'MYSQL_CACHING_SHA2_PASSWORD'|'POSTGRES_SCRAM_SHA_256'|'POSTGRES_MD5'|'SQL_SERVER_AUTHENTICATION' $ClientPasswordAuthType
 */
class UserAuthConfigInfo extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     UserName?: string,
     *     AuthScheme?: 'SECRETS',
     *     SecretArn?: string,
     *     IAMAuth?: 'DISABLED'|'REQUIRED'|'ENABLED',
     *     ClientPasswordAuthType?: 'MYSQL_NATIVE_PASSWORD'|'MYSQL_CACHING_SHA2_PASSWORD'|'POSTGRES_SCRAM_SHA_256'|'POSTGRES_MD5'|'SQL_SERVER_AUTHENTICATION'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
