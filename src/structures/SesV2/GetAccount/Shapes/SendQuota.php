<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Max24HourSend
 * @property double|null $MaxSendRate
 * @property double|null $SentLast24Hours
 */
class SendQuota extends Shape
{
    /**
     * @param array{
     *     Max24HourSend?: double|null,
     *     MaxSendRate?: double|null,
     *     SentLast24Hours?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
