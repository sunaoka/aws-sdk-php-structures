<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogGroupArn
 */
class CloudwatchLogsLogDestinationParameters extends Shape
{
    /**
     * @param array{LogGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
