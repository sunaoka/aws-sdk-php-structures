<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiToken
 */
class DynatraceConnectorProfileCredentials extends Shape
{
    /**
     * @param array{apiToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
