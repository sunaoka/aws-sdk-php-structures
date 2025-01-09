<?php

namespace Sunaoka\Aws\Structures\signer\DescribeSigningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reason
 * @property \Aws\Api\DateTimeResult $revokedAt
 * @property string $revokedBy
 */
class SigningJobRevocationRecord extends Shape
{
    /**
     * @param array{
     *     reason?: string,
     *     revokedAt?: \Aws\Api\DateTimeResult,
     *     revokedBy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
