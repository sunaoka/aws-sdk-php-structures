<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetTrustStoreCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface|null $body
 * @property string|null $issuer
 * @property \Aws\Api\DateTimeResult|null $notValidAfter
 * @property \Aws\Api\DateTimeResult|null $notValidBefore
 * @property string|null $subject
 * @property string|null $thumbprint
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     body?: \Psr\Http\Message\StreamInterface|null,
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
