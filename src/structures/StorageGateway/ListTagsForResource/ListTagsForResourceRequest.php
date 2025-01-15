<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property string|null $Marker
 * @property int<1, max>|null $Limit
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     Marker?: string|null,
     *     Limit?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
