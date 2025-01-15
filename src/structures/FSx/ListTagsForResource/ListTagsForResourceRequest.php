<?php

namespace Sunaoka\Aws\Structures\FSx\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
