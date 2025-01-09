<?php

namespace Sunaoka\Aws\Structures\Iam\ListOpenIDConnectProviderTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpenIDConnectProviderArn
 * @property string $Marker
 * @property int $MaxItems
 */
class ListOpenIDConnectProviderTagsRequest extends Request
{
    /**
     * @param array{
     *     OpenIDConnectProviderArn: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
