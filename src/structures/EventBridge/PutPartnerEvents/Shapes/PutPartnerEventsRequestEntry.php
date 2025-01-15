<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutPartnerEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Time
 * @property string|null $Source
 * @property list<string>|null $Resources
 * @property string|null $DetailType
 * @property string|null $Detail
 */
class PutPartnerEventsRequestEntry extends Shape
{
    /**
     * @param array{
     *     Time?: \Aws\Api\DateTimeResult|null,
     *     Source?: string|null,
     *     Resources?: list<string>|null,
     *     DetailType?: string|null,
     *     Detail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
