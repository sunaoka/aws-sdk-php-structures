<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\UpdateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogGroupName
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{LogGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
