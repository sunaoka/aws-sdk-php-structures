<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AutoAcceptRequests
 * @property bool|null $AutoDeclineRecurringRequests
 * @property bool|null $AutoDeclineConflictingRequests
 */
class BookingOptions extends Shape
{
    /**
     * @param array{
     *     AutoAcceptRequests?: bool|null,
     *     AutoDeclineRecurringRequests?: bool|null,
     *     AutoDeclineConflictingRequests?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
