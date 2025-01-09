<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $filterArn
 */
class DescribeFilterRequest extends Request
{
    /**
     * @param array{filterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
