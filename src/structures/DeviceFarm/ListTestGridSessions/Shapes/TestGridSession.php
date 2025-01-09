<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'ACTIVE'|'CLOSED'|'ERRORED' $status
 * @property \Aws\Api\DateTimeResult $created
 * @property \Aws\Api\DateTimeResult $ended
 * @property double $billingMinutes
 * @property string $seleniumProperties
 */
class TestGridSession extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     status?: 'ACTIVE'|'CLOSED'|'ERRORED',
     *     created?: \Aws\Api\DateTimeResult,
     *     ended?: \Aws\Api\DateTimeResult,
     *     billingMinutes?: double,
     *     seleniumProperties?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
