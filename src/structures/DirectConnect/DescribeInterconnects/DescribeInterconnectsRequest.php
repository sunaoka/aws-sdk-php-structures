<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeInterconnects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $interconnectId
 */
class DescribeInterconnectsRequest extends Request
{
    /**
     * @param array{interconnectId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
