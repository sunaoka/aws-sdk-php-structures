<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CloudFrontDefaultCertificate
 * @property string $IAMCertificateId
 * @property string $ACMCertificateArn
 * @property 'sni-only'|'vip'|'static-ip' $SSLSupportMethod
 * @property 'SSLv3'|'TLSv1'|'TLSv1_2016'|'TLSv1.1_2016'|'TLSv1.2_2018'|'TLSv1.2_2019'|'TLSv1.2_2021' $MinimumProtocolVersion
 * @property string $Certificate
 * @property 'cloudfront'|'iam'|'acm' $CertificateSource
 */
class ViewerCertificate extends Shape
{
    /**
     * @param array{
     *     CloudFrontDefaultCertificate?: bool,
     *     IAMCertificateId?: string,
     *     ACMCertificateArn?: string,
     *     SSLSupportMethod?: 'sni-only'|'vip'|'static-ip',
     *     MinimumProtocolVersion?: 'SSLv3'|'TLSv1'|'TLSv1_2016'|'TLSv1.1_2016'|'TLSv1.2_2018'|'TLSv1.2_2019'|'TLSv1.2_2021',
     *     Certificate?: string,
     *     CertificateSource?: 'cloudfront'|'iam'|'acm'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
