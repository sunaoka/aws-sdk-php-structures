<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListTrustStoreCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $issuer
 * @property \Aws\Api\DateTimeResult|null $notValidAfter
 * @property \Aws\Api\DateTimeResult|null $notValidBefore
 * @property string|null $subject
 * @property string|null $thumbprint
 */
class CertificateSummary extends Shape
{
    /**
     * @param array{
     *     issuer?: string|null,
     *     notValidAfter?: \Aws\Api\DateTimeResult|null,
     *     notValidBefore?: \Aws\Api\DateTimeResult|null,
     *     subject?: string|null,
     *     thumbprint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
