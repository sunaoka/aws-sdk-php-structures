<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerName
 * @property int|null $Port
 * @property string|null $DatabaseName
 * @property 'none'|'require'|'verify-ca'|'verify-full'|null $SslMode
 * @property bool|null $EncryptPassword
 * @property string|null $CertificateArn
 */
class SybaseAseDataProviderSettings extends Shape
{
    /**
     * @param array{
     *     ServerName?: string|null,
     *     Port?: int|null,
     *     DatabaseName?: string|null,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full'|null,
     *     EncryptPassword?: bool|null,
     *     CertificateArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
