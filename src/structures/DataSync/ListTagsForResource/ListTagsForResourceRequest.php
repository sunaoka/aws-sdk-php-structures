<?php

namespace Sunaoka\Aws\Structures\DataSync\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
