<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningPlatforms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $category
 * @property string|null $partner
 * @property string|null $target
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListSigningPlatformsRequest extends Request
{
    /**
     * @param array{
     *     category?: string|null,
     *     partner?: string|null,
     *     target?: string|null,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
