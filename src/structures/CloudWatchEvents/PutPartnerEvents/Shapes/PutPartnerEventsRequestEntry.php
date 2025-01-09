<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutPartnerEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Time
 * @property string $Source
 * @property list<string> $Resources
 * @property string $DetailType
 * @property string $Detail
 */
class PutPartnerEventsRequestEntry extends Shape
{
    /**
     * @param array{
     *     Time?: \Aws\Api\DateTimeResult,
     *     Source?: string,
     *     Resources?: list<string>,
     *     DetailType?: string,
     *     Detail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
