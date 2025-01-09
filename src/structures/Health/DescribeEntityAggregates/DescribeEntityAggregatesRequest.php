<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $eventArns
 */
class DescribeEntityAggregatesRequest extends Request
{
    /**
     * @param array{eventArns?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
