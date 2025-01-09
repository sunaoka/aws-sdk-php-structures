<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextMarker
 * @property int<1, 100> $Limit
 * @property string $ResourceARN
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     Limit?: int<1, 100>,
     *     ResourceARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
