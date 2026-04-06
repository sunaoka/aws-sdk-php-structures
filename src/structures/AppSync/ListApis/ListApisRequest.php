<?php

namespace Sunaoka\Aws\Structures\AppSync\ListApis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<0, 25>|null $maxResults
 */
class ListApisRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<0, 25>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
