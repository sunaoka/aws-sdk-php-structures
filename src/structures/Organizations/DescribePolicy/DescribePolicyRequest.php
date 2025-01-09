<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 */
class DescribePolicyRequest extends Request
{
    /**
     * @param array{PolicyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
