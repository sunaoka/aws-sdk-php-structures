<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionTenant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'cloudfront'|'self-hosted' $ValidationTokenHost
 * @property string|null $PrimaryDomainName
 * @property 'enabled'|'disabled'|null $CertificateTransparencyLoggingPreference
 */
class ManagedCertificateRequest extends Shape
{
    /**
     * @param array{
     *     ValidationTokenHost: 'cloudfront'|'self-hosted',
     *     PrimaryDomainName?: string|null,
     *     CertificateTransparencyLoggingPreference?: 'enabled'|'disabled'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
