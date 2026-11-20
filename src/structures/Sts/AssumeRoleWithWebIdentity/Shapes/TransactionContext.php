<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithWebIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $IdentityProvider
 */
class TransactionContext extends Shape
{
    /**
     * @param array{IdentityProvider?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
