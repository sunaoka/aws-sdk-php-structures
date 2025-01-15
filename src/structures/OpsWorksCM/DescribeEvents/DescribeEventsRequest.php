<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerName
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     ServerName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
