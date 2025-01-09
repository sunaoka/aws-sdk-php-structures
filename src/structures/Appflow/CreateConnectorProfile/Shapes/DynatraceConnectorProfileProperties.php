<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceUrl
 */
class DynatraceConnectorProfileProperties extends Shape
{
    /**
     * @param array{instanceUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
