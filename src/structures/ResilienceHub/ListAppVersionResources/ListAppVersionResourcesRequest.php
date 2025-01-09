<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersionResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $resolutionId
 */
class ListAppVersionResourcesRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     resolutionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
