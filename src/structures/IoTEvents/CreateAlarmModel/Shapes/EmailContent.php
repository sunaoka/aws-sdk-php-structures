<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $subject
 * @property string $additionalMessage
 */
class EmailContent extends Shape
{
    /**
     * @param array{
     *     subject?: string,
     *     additionalMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
