<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $subject
 * @property string|null $additionalMessage
 */
class EmailContent extends Shape
{
    /**
     * @param array{
     *     subject?: string|null,
     *     additionalMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
