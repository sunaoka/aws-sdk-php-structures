<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerName
 * @property int|null $Port
 * @property 'none'|'require'|'verify-ca'|'verify-full'|null $SslMode
 * @property string|null $CertificateArn
 */
class MySqlDataProviderSettings extends Shape
{
    /**
     * @param array{
     *     ServerName?: string|null,
     *     Port?: int|null,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full'|null,
     *     CertificateArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
