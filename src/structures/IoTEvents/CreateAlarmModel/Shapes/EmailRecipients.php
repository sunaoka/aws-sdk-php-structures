<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecipientDetail>|null $to
 */
class EmailRecipients extends Shape
{
    /**
     * @param array{to?: list<RecipientDetail>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
