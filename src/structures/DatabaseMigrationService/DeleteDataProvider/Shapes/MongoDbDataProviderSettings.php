<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerName
 * @property int $Port
 * @property string $DatabaseName
 * @property 'none'|'require'|'verify-ca'|'verify-full' $SslMode
 * @property string $CertificateArn
 * @property 'no'|'password' $AuthType
 * @property string $AuthSource
 * @property 'default'|'mongodb_cr'|'scram_sha_1' $AuthMechanism
 */
class MongoDbDataProviderSettings extends Shape
{
    /**
     * @param array{
     *     ServerName?: string,
     *     Port?: int,
     *     DatabaseName?: string,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full',
     *     CertificateArn?: string,
     *     AuthType?: 'no'|'password',
     *     AuthSource?: string,
     *     AuthMechanism?: 'default'|'mongodb_cr'|'scram_sha_1'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
