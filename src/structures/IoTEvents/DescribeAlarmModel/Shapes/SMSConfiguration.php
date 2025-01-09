<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $senderId
 * @property string $additionalMessage
 * @property list<RecipientDetail> $recipients
 */
class SMSConfiguration extends Shape
{
    /**
     * @param array{
     *     senderId?: string,
     *     additionalMessage?: string,
     *     recipients: list<RecipientDetail>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
