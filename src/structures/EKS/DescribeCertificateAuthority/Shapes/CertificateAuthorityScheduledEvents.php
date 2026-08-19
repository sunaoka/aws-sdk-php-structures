<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $firstAutoActivation
 * @property \Aws\Api\DateTimeResult|null $finalAutoActivation
 */
class CertificateAuthorityScheduledEvents extends Shape
{
    /**
     * @param array{
     *     firstAutoActivation?: \Aws\Api\DateTimeResult|null,
     *     finalAutoActivation?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
