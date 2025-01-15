<?php

namespace Sunaoka\Aws\Structures\Athena\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property string|null $NextToken
 * @property int<75, max>|null $MaxResults
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<75, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
