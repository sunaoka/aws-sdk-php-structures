<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Max24HourSend
 * @property double $MaxSendRate
 * @property double $SentLast24Hours
 */
class SendQuota extends Shape
{
    /**
     * @param array{
     *     Max24HourSend?: double,
     *     MaxSendRate?: double,
     *     SentLast24Hours?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
