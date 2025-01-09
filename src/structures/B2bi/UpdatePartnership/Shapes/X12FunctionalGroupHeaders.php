<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdatePartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationSenderCode
 * @property string $applicationReceiverCode
 * @property string $responsibleAgencyCode
 */
class X12FunctionalGroupHeaders extends Shape
{
    /**
     * @param array{
     *     applicationSenderCode?: string,
     *     applicationReceiverCode?: string,
     *     responsibleAgencyCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
