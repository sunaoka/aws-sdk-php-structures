<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetTrustStoreCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $body
 * @property string $issuer
 * @property \Aws\Api\DateTimeResult $notValidAfter
 * @property \Aws\Api\DateTimeResult $notValidBefore
 * @property string $subject
 * @property string $thumbprint
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     body?: string,
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
