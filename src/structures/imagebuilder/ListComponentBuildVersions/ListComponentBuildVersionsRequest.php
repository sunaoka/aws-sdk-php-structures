<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListComponentBuildVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentVersionArn
 * @property int $maxResults
 * @property string $nextToken
 */
class ListComponentBuildVersionsRequest extends Request
{
    /**
     * @param array{
     *     componentVersionArn: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
