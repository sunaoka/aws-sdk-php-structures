<?php

namespace Sunaoka\Aws\Structures\Athena\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property string $NextToken
 * @property int<75, max> $MaxResults
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     NextToken?: string,
     *     MaxResults?: int<75, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
