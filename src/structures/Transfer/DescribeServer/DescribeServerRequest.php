<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 */
class DescribeServerRequest extends Request
{
    /**
     * @param array{ServerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
