<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     portalId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
