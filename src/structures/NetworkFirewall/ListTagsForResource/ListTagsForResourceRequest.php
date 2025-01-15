<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 100>|null $MaxResults
 * @property string $ResourceArn
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 100>|null,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
