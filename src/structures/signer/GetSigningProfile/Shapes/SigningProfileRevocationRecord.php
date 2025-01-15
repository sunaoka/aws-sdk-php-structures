<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $revocationEffectiveFrom
 * @property \Aws\Api\DateTimeResult|null $revokedAt
 * @property string|null $revokedBy
 */
class SigningProfileRevocationRecord extends Shape
{
    /**
     * @param array{
     *     revocationEffectiveFrom?: \Aws\Api\DateTimeResult|null,
     *     revokedAt?: \Aws\Api\DateTimeResult|null,
     *     revokedBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
