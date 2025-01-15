<?php

namespace Sunaoka\Aws\Structures\Iam\ListOpenIDConnectProviderTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpenIDConnectProviderArn
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListOpenIDConnectProviderTagsRequest extends Request
{
    /**
     * @param array{
     *     OpenIDConnectProviderArn: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
