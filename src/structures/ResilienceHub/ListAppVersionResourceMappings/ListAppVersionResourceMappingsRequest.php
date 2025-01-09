<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersionResourceMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListAppVersionResourceMappingsRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
