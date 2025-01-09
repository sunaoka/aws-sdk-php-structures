<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListEventStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListEventStreamsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
