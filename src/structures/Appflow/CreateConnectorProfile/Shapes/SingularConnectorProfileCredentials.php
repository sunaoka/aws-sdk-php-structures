<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKey
 */
class SingularConnectorProfileCredentials extends Shape
{
    /**
     * @param array{apiKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
