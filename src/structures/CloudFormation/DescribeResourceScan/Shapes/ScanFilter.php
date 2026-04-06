<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeResourceScan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Types
 */
class ScanFilter extends Shape
{
    /**
     * @param array{Types?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
