<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextMarker
 * @property int<0, 100>|null $Limit
 * @property string $ResourceARN
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     NextMarker?: string|null,
     *     Limit?: int<0, 100>|null,
     *     ResourceARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
