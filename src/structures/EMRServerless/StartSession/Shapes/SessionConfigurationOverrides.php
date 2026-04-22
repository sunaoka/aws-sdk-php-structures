<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Configuration>|null $runtimeConfiguration
 */
class SessionConfigurationOverrides extends Shape
{
    /**
     * @param array{runtimeConfiguration?: list<Configuration>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
