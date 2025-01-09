<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListUnsupportedAppVersionResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property int $maxResults
 * @property string $nextToken
 * @property string $resolutionId
 */
class ListUnsupportedAppVersionResourcesRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     resolutionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
