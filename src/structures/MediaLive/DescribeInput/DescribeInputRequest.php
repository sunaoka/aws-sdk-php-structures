<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputId
 */
class DescribeInputRequest extends Request
{
    /**
     * @param array{InputId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
