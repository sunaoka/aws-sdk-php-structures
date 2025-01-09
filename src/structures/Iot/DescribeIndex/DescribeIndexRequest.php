<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $indexName
 */
class DescribeIndexRequest extends Request
{
    /**
     * @param array{indexName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
