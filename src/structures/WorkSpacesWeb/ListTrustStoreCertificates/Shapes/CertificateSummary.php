<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListTrustStoreCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property \Aws\Api\DateTimeResult $notValidAfter
 * @property \Aws\Api\DateTimeResult $notValidBefore
 * @property string $subject
 * @property string $thumbprint
 */
class CertificateSummary extends Shape
{
    /**
     * @param array{
     *     issuer?: string,
     *     notValidAfter?: \Aws\Api\DateTimeResult,
     *     notValidBefore?: \Aws\Api\DateTimeResult,
     *     subject?: string,
     *     thumbprint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
