<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $NextToken
 * @property int<50, max> $MaxResults
 */
class ListTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     NextToken?: string,
     *     MaxResults?: int<50, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
