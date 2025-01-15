<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextActivity
 */
class ContactCenterActivity extends Shape
{
    /**
     * @param array{NextActivity?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
