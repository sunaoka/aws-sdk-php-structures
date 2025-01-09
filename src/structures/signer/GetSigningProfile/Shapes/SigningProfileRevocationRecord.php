<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $revocationEffectiveFrom
 * @property \Aws\Api\DateTimeResult $revokedAt
 * @property string $revokedBy
 */
class SigningProfileRevocationRecord extends Shape
{
    /**
     * @param array{
     *     revocationEffectiveFrom?: \Aws\Api\DateTimeResult,
     *     revokedAt?: \Aws\Api\DateTimeResult,
     *     revokedBy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
