<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadArn
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{WorkloadArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
