<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     portalId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
