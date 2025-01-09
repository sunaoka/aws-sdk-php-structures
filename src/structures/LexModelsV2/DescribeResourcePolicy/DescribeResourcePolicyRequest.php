<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 */
class DescribeResourcePolicyRequest extends Request
{
    /**
     * @param array{resourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
