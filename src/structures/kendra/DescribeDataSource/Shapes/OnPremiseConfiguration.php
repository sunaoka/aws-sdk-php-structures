<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostUrl
 * @property string $OrganizationName
 * @property S3Path $SslCertificateS3Path
 */
class OnPremiseConfiguration extends Shape
{
    /**
     * @param array{
     *     HostUrl: string,
     *     OrganizationName: string,
     *     SslCertificateS3Path: S3Path
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
