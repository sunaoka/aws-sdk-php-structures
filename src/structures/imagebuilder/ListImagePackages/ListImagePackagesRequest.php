<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageBuildVersionArn
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListImagePackagesRequest extends Request
{
    /**
     * @param array{
     *     imageBuildVersionArn: string,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
