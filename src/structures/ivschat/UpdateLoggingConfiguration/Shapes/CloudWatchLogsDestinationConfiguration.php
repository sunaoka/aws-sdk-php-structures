<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupName
 */
class CloudWatchLogsDestinationConfiguration extends Shape
{
    /**
     * @param array{logGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
