<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextActivity
 * @property WaitTime|null $WaitTime
 */
class WaitActivity extends Shape
{
    /**
     * @param array{
     *     NextActivity?: string|null,
     *     WaitTime?: WaitTime|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
