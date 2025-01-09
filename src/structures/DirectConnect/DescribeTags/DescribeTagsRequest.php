<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $resourceArns
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{resourceArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
