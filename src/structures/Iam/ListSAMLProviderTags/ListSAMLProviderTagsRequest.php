<?php

namespace Sunaoka\Aws\Structures\Iam\ListSAMLProviderTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SAMLProviderArn
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListSAMLProviderTagsRequest extends Request
{
    /**
     * @param array{
     *     SAMLProviderArn: string,
     *     Marker?: string,
     *     MaxItems?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
