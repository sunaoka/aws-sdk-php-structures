<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeDataProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerName
 * @property int $Port
 * @property string $DatabaseName
 * @property 'none'|'require'|'verify-ca'|'verify-full' $SslMode
 * @property string $CertificateArn
 */
class DocDbDataProviderSettings extends Shape
{
    /**
     * @param array{
     *     ServerName?: string,
     *     Port?: int,
     *     DatabaseName?: string,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full',
     *     CertificateArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
