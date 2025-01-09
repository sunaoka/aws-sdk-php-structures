<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $MaxResults
 * @property string $NextToken
 * @property string $ResourceArn
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, max>,
     *     NextToken?: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
