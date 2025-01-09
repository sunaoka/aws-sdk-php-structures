<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListSharedEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $OutpostId
 */
class ListSharedEndpointsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     OutpostId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
