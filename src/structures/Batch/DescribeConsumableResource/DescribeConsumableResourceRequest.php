<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeConsumableResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $consumableResource
 */
class DescribeConsumableResourceRequest extends Request
{
    /**
     * @param array{consumableResource: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
