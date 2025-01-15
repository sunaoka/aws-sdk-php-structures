<?php

namespace Sunaoka\Aws\Structures\OpsWorks\ListTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class ListTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
