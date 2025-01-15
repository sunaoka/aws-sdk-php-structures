<?php

namespace Sunaoka\Aws\Structures\Transfer\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
