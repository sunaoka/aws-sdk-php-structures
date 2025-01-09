<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceId
 */
class ConnectConfiguration extends Shape
{
    /**
     * @param array{instanceId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
