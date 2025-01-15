<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListComponentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListComponentVersionsRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
