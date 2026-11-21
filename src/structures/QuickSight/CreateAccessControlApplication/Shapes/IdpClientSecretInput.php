<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $RegionalSecretManagerArns
 */
class IdpClientSecretInput extends Shape
{
    /**
     * @param array{RegionalSecretManagerArns: array<string, string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
