<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateVaultLock\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Policy
 */
class VaultLockPolicy extends Shape
{
    /**
     * @param array{Policy?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
