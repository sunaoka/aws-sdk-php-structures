<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $environmentId
 */
class EnvironmentExitSessionActionDefinition extends Shape
{
    /**
     * @param array{environmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
