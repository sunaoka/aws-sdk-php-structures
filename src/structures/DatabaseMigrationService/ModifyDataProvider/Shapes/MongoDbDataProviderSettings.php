<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerName
 * @property int|null $Port
 * @property string|null $DatabaseName
 * @property 'none'|'require'|'verify-ca'|'verify-full'|null $SslMode
 * @property string|null $CertificateArn
 * @property 'no'|'password'|null $AuthType
 * @property string|null $AuthSource
 * @property 'default'|'mongodb_cr'|'scram_sha_1'|null $AuthMechanism
 */
class MongoDbDataProviderSettings extends Shape
{
    /**
     * @param array{
     *     ServerName?: string|null,
     *     Port?: int|null,
     *     DatabaseName?: string|null,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full'|null,
     *     CertificateArn?: string|null,
     *     AuthType?: 'no'|'password'|null,
     *     AuthSource?: string|null,
     *     AuthMechanism?: 'default'|'mongodb_cr'|'scram_sha_1'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
