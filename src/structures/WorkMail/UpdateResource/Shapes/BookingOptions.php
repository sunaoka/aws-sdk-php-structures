<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AutoAcceptRequests
 * @property bool $AutoDeclineRecurringRequests
 * @property bool $AutoDeclineConflictingRequests
 */
class BookingOptions extends Shape
{
    /**
     * @param array{
     *     AutoAcceptRequests?: bool,
     *     AutoDeclineRecurringRequests?: bool,
     *     AutoDeclineConflictingRequests?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
