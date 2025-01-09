<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property int<1, max> $Limit
 * @property string $NextToken
 */
class DescribeGameSessionQueuesRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>,
     *     Limit?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
