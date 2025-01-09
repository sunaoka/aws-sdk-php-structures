<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NextActivity
 */
class ContactCenterActivity extends Shape
{
    /**
     * @param array{NextActivity?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
