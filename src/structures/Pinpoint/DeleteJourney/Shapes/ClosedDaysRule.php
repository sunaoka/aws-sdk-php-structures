<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $StartDateTime
 * @property string $EndDateTime
 */
class ClosedDaysRule extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     StartDateTime?: string,
     *     EndDateTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
