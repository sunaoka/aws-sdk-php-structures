<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateVaultLock\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Policy
 */
class VaultLockPolicy extends Shape
{
    /**
     * @param array{Policy?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
