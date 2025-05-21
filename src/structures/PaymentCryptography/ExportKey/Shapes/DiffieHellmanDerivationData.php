<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SharedInformation
 */
class DiffieHellmanDerivationData extends Shape
{
    /**
     * @param array{SharedInformation?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
