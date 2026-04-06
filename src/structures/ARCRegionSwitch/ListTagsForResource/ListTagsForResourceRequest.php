<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
