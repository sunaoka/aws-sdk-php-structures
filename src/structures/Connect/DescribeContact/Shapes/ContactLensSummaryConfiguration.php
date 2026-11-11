<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SummaryModes
 */
class ContactLensSummaryConfiguration extends Shape
{
    /**
     * @param array{SummaryModes?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
