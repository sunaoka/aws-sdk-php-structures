<?php

namespace Sunaoka\Aws\Structures\DataSync\ListTaskExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListTaskExecutionsRequest extends Request
{
    /**
     * @param array{
     *     TaskArn?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
