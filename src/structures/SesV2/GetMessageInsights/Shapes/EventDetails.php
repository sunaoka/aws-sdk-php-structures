<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Bounce|null $Bounce
 * @property Complaint|null $Complaint
 */
class EventDetails extends Shape
{
    /**
     * @param array{
     *     Bounce?: Bounce|null,
     *     Complaint?: Complaint|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
