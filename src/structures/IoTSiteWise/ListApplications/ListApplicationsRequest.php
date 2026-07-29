<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
