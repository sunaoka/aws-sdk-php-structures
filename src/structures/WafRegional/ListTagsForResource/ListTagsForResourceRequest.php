<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextMarker
 * @property int<0, 100> $Limit
 * @property string $ResourceARN
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     Limit?: int<0, 100>,
     *     ResourceARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
