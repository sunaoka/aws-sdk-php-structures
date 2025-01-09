<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextMarker
 * @property int $Limit
 * @property string $ResourceARN
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     Limit?: int,
     *     ResourceARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
