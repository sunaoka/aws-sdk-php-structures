<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetailsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $latestDescription
 */
class EventDescription extends Shape
{
    /**
     * @param array{latestDescription?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
