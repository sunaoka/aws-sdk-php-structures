<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListProjectAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListProjectAssetsRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
