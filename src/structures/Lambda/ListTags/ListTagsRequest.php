<?php

namespace Sunaoka\Aws\Structures\Lambda\ListTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Resource
 */
class ListTagsRequest extends Request
{
    /**
     * @param array{Resource: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
