<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DescribeIndexRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
