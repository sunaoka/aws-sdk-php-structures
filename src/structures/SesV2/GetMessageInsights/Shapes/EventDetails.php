<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Bounce $Bounce
 * @property Complaint $Complaint
 */
class EventDetails extends Shape
{
    /**
     * @param array{
     *     Bounce?: Bounce,
     *     Complaint?: Complaint
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
