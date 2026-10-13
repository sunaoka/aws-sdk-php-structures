<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\ListTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resource
 */
class ListTagsRequest extends Request
{
    /**
     * @param array{resource: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
