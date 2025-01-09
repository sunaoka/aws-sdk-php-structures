<?php

namespace Sunaoka\Aws\Structures\Efs\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
