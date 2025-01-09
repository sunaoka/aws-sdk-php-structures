<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecipientDetail> $to
 */
class EmailRecipients extends Shape
{
    /**
     * @param array{to?: list<RecipientDetail>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
