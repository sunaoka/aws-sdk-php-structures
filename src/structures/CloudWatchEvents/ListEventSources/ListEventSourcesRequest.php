<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListEventSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property string $NextToken
 * @property int<1, 100> $Limit
 */
class ListEventSourcesRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     NextToken?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
