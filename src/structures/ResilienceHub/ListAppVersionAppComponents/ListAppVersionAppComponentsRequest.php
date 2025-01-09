<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersionAppComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property int $maxResults
 * @property string $nextToken
 */
class ListAppVersionAppComponentsRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
