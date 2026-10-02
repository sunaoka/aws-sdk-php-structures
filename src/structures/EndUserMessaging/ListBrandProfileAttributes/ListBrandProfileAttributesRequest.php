<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ListBrandProfileAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $brandProfileId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListBrandProfileAttributesRequest extends Request
{
    /**
     * @param array{
     *     brandProfileId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
