<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerName
 * @property int $Port
 * @property 'none'|'require'|'verify-ca'|'verify-full' $SslMode
 * @property string $CertificateArn
 */
class MySqlDataProviderSettings extends Shape
{
    /**
     * @param array{
     *     ServerName?: string,
     *     Port?: int,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full',
     *     CertificateArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
