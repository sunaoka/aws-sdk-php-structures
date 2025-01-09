<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeReturnShippingLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class DescribeReturnShippingLabelRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
