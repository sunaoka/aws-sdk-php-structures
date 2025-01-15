<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $from
 * @property EmailContent|null $content
 * @property EmailRecipients $recipients
 */
class EmailConfiguration extends Shape
{
    /**
     * @param array{
     *     from: string,
     *     content?: EmailContent|null,
     *     recipients: EmailRecipients
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
