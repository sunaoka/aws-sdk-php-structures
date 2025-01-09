<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningPlatforms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $category
 * @property string $partner
 * @property string $target
 * @property int $maxResults
 * @property string $nextToken
 */
class ListSigningPlatformsRequest extends Request
{
    /**
     * @param array{
     *     category?: string,
     *     partner?: string,
     *     target?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
