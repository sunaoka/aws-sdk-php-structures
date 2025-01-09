<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListComponentBuildVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentVersionArn
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 */
class ListComponentBuildVersionsRequest extends Request
{
    /**
     * @param array{
     *     componentVersionArn: string,
     *     maxResults?: int<1, 25>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
