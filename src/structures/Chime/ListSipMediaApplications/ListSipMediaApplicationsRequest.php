<?php

namespace Sunaoka\Aws\Structures\Chime\ListSipMediaApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 99>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSipMediaApplicationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 99>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
