<?php

namespace Sunaoka\Aws\Structures\Glacier\GetVaultAccessPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Policy
 */
class VaultAccessPolicy extends Shape
{
    /**
     * @param array{Policy?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
