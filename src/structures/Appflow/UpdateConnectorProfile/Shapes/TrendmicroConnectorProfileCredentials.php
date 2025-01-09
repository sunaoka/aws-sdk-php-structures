<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiSecretKey
 */
class TrendmicroConnectorProfileCredentials extends Shape
{
    /**
     * @param array{apiSecretKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
