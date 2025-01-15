<?php

namespace Sunaoka\Aws\Structures\Glacier\SetVaultAccessPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Policy
 */
class VaultAccessPolicy extends Shape
{
    /**
     * @param array{Policy?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
