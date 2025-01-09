<?php

namespace Sunaoka\Aws\Structures\OpsWorks\ListTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
