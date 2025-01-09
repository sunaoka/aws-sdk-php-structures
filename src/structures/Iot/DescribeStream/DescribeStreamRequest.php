<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $streamId
 */
class DescribeStreamRequest extends Request
{
    /**
     * @param array{streamId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
