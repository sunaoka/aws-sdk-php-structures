<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AcmCertificateArn
 * @property string $Certificate
 * @property string $CertificateSource
 * @property bool $CloudFrontDefaultCertificate
 * @property string $IamCertificateId
 * @property string $MinimumProtocolVersion
 * @property string $SslSupportMethod
 */
class AwsCloudFrontDistributionViewerCertificate extends Shape
{
    /**
     * @param array{
     *     AcmCertificateArn?: string,
     *     Certificate?: string,
     *     CertificateSource?: string,
     *     CloudFrontDefaultCertificate?: bool,
     *     IamCertificateId?: string,
     *     MinimumProtocolVersion?: string,
     *     SslSupportMethod?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
