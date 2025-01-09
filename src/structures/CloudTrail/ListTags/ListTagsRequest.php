<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ResourceIdList
 * @property string $NextToken
 */
class ListTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdList: list<string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
