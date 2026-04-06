<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListTrustStoreCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thumbprint
 * @property string|null $subject
 * @property string|null $issuer
 * @property \Aws\Api\DateTimeResult|null $notValidBefore
 * @property \Aws\Api\DateTimeResult|null $notValidAfter
 */
class CertificateSummary extends Shape
{
    /**
     * @param array{
     *     thumbprint?: string|null,
     *     subject?: string|null,
     *     issuer?: string|null,
     *     notValidBefore?: \Aws\Api\DateTimeResult|null,
     *     notValidAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
