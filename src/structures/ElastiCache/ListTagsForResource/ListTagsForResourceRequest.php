<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceName
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{ResourceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
