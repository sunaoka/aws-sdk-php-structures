<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $from
 * @property EmailContent $content
 * @property EmailRecipients $recipients
 */
class EmailConfiguration extends Shape
{
    /**
     * @param array{
     *     from: string,
     *     content?: EmailContent,
     *     recipients: EmailRecipients
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
