<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageBuildVersionArn
 * @property int $maxResults
 * @property string $nextToken
 */
class ListImagePackagesRequest extends Request
{
    /**
     * @param array{
     *     imageBuildVersionArn: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
