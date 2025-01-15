<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeReplay\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<string>|null $FilterArns
 */
class ReplayDestination extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     FilterArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
