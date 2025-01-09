<?php

namespace Sunaoka\Aws\Structures\DAX\ListTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceName
 * @property string $NextToken
 */
class ListTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceName: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
