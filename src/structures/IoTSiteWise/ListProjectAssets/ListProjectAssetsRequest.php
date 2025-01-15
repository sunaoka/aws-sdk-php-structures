<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListProjectAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListProjectAssetsRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
