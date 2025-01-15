<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string|null $NextToken
 * @property int<50, max>|null $MaxResults
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<50, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
