<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerName
 * @property int|null $Port
 * @property string|null $DatabaseName
 * @property 'none'|'require'|'verify-ca'|'verify-full'|null $SslMode
 * @property string|null $CertificateArn
 * @property string|null $S3Path
 * @property string|null $S3AccessRoleArn
 */
class MicrosoftSqlServerDataProviderSettings extends Shape
{
    /**
     * @param array{
     *     ServerName?: string|null,
     *     Port?: int|null,
     *     DatabaseName?: string|null,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full'|null,
     *     CertificateArn?: string|null,
     *     S3Path?: string|null,
     *     S3AccessRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
