<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithWebIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OriginIdentity|null $OriginIdentity
 * @property TransactionContext|null $TransactionContext
 */
class TrustedIdentityPropagationContext extends Shape
{
    /**
     * @param array{
     *     OriginIdentity?: OriginIdentity|null,
     *     TransactionContext?: TransactionContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
