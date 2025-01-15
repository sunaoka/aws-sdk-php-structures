<?php

namespace Sunaoka\Aws\Structures\CloudFront\CopyDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CloudFrontDefaultCertificate
 * @property string|null $IAMCertificateId
 * @property string|null $ACMCertificateArn
 * @property 'sni-only'|'vip'|'static-ip'|null $SSLSupportMethod
 * @property 'SSLv3'|'TLSv1'|'TLSv1_2016'|'TLSv1.1_2016'|'TLSv1.2_2018'|'TLSv1.2_2019'|'TLSv1.2_2021'|null $MinimumProtocolVersion
 * @property string|null $Certificate
 * @property 'cloudfront'|'iam'|'acm'|null $CertificateSource
 */
class ViewerCertificate extends Shape
{
    /**
     * @param array{
     *     CloudFrontDefaultCertificate?: bool|null,
     *     IAMCertificateId?: string|null,
     *     ACMCertificateArn?: string|null,
     *     SSLSupportMethod?: 'sni-only'|'vip'|'static-ip'|null,
     *     MinimumProtocolVersion?: 'SSLv3'|'TLSv1'|'TLSv1_2016'|'TLSv1.1_2016'|'TLSv1.2_2018'|'TLSv1.2_2019'|'TLSv1.2_2021'|null,
     *     Certificate?: string|null,
     *     CertificateSource?: 'cloudfront'|'iam'|'acm'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
