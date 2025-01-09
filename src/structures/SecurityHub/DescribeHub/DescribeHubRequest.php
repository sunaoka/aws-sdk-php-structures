<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeHub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubArn
 */
class DescribeHubRequest extends Request
{
    /**
     * @param array{HubArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
