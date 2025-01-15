<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersionAppComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAppVersionAppComponentsRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
