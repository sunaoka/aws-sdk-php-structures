<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListSharedEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 100>|null $MaxResults
 * @property string $OutpostId
 */
class ListSharedEndpointsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 100>|null,
     *     OutpostId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
