<?php

namespace Sunaoka\Aws\Structures\Ssm\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CloudWatchLogGroupName
 * @property bool $CloudWatchOutputEnabled
 */
class CloudWatchOutputConfig extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogGroupName?: string,
     *     CloudWatchOutputEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
