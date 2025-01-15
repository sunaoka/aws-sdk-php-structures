<?php

namespace Sunaoka\Aws\Structures\signer\DescribeSigningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reason
 * @property \Aws\Api\DateTimeResult|null $revokedAt
 * @property string|null $revokedBy
 */
class SigningJobRevocationRecord extends Shape
{
    /**
     * @param array{
     *     reason?: string|null,
     *     revokedAt?: \Aws\Api\DateTimeResult|null,
     *     revokedBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
