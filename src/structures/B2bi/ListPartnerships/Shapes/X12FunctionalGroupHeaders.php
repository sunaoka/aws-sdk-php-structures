<?php

namespace Sunaoka\Aws\Structures\B2bi\ListPartnerships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $applicationSenderCode
 * @property string|null $applicationReceiverCode
 * @property string|null $responsibleAgencyCode
 */
class X12FunctionalGroupHeaders extends Shape
{
    /**
     * @param array{
     *     applicationSenderCode?: string|null,
     *     applicationReceiverCode?: string|null,
     *     responsibleAgencyCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
