<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetTrustStoreCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thumbprint
 * @property string|null $subject
 * @property string|null $issuer
 * @property \Aws\Api\DateTimeResult|null $notValidBefore
 * @property \Aws\Api\DateTimeResult|null $notValidAfter
 * @property \Psr\Http\Message\StreamInterface|null $body
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     thumbprint?: string|null,
     *     subject?: string|null,
     *     issuer?: string|null,
     *     notValidBefore?: \Aws\Api\DateTimeResult|null,
     *     notValidAfter?: \Aws\Api\DateTimeResult|null,
     *     body?: \Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
