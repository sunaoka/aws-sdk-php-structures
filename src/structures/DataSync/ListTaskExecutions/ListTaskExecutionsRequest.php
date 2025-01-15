<?php

namespace Sunaoka\Aws\Structures\DataSync\ListTaskExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TaskArn
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTaskExecutionsRequest extends Request
{
    /**
     * @param array{
     *     TaskArn?: string|null,
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
