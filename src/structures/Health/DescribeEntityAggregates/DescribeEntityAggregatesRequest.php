<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $eventArns
 */
class DescribeEntityAggregatesRequest extends Request
{
    /**
     * @param array{eventArns?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
