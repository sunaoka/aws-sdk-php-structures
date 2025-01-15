<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Names
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class DescribeGameSessionQueuesRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
