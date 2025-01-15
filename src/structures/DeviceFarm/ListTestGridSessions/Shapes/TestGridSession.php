<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'ACTIVE'|'CLOSED'|'ERRORED'|null $status
 * @property \Aws\Api\DateTimeResult|null $created
 * @property \Aws\Api\DateTimeResult|null $ended
 * @property double|null $billingMinutes
 * @property string|null $seleniumProperties
 */
class TestGridSession extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     status?: 'ACTIVE'|'CLOSED'|'ERRORED'|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     ended?: \Aws\Api\DateTimeResult|null,
     *     billingMinutes?: double|null,
     *     seleniumProperties?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
