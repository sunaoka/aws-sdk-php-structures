<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetManagedCertificateDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property 'pending-validation'|'issued'|'inactive'|'expired'|'validation-timed-out'|'revoked'|'failed'|null $CertificateStatus
 * @property 'cloudfront'|'self-hosted'|null $ValidationTokenHost
 * @property list<ValidationTokenDetail>|null $ValidationTokenDetails
 */
class ManagedCertificateDetails extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     CertificateStatus?: 'pending-validation'|'issued'|'inactive'|'expired'|'validation-timed-out'|'revoked'|'failed'|null,
     *     ValidationTokenHost?: 'cloudfront'|'self-hosted'|null,
     *     ValidationTokenDetails?: list<ValidationTokenDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
