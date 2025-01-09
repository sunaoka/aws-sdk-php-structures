<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceUrl
 */
class DatadogConnectorProfileProperties extends Shape
{
    /**
     * @param array{instanceUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
