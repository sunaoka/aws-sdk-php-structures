<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{resourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
