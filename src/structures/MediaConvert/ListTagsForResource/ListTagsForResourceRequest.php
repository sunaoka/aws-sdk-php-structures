<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
