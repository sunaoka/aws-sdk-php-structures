<?php

namespace Sunaoka\Aws\Structures\Iam\ListSAMLProviderTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SAMLProviderArn
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListSAMLProviderTagsRequest extends Request
{
    /**
     * @param array{
     *     SAMLProviderArn: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
