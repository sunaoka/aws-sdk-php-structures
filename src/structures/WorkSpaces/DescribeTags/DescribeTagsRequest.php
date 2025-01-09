<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{ResourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
