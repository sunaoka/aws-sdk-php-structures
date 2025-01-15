<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AddonIssue>|null $issues
 */
class AddonHealth extends Shape
{
    /**
     * @param array{issues?: list<AddonIssue>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
