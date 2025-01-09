<?php

namespace Sunaoka\Aws\Structures\Transfer\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
