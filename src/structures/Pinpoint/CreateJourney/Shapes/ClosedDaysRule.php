<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $StartDateTime
 * @property string|null $EndDateTime
 */
class ClosedDaysRule extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     StartDateTime?: string|null,
     *     EndDateTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
