<?php

namespace Sunaoka\Aws\Structures\Chime\ListSipMediaApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 99> $MaxResults
 * @property string $NextToken
 */
class ListSipMediaApplicationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 99>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
