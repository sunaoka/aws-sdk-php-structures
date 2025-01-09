<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     portalId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
