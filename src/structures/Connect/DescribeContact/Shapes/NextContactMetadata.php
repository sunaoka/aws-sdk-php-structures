<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuickConnectContactData|null $QuickConnectContactData
 */
class NextContactMetadata extends Shape
{
    /**
     * @param array{QuickConnectContactData?: QuickConnectContactData|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
