<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\StartReplay\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<string> $FilterArns
 */
class ReplayDestination extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     FilterArns?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
