<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AcmCertificateArn
 * @property string|null $Certificate
 * @property string|null $CertificateSource
 * @property bool|null $CloudFrontDefaultCertificate
 * @property string|null $IamCertificateId
 * @property string|null $MinimumProtocolVersion
 * @property string|null $SslSupportMethod
 */
class AwsCloudFrontDistributionViewerCertificate extends Shape
{
    /**
     * @param array{
     *     AcmCertificateArn?: string|null,
     *     Certificate?: string|null,
     *     CertificateSource?: string|null,
     *     CloudFrontDefaultCertificate?: bool|null,
     *     IamCertificateId?: string|null,
     *     MinimumProtocolVersion?: string|null,
     *     SslSupportMethod?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
