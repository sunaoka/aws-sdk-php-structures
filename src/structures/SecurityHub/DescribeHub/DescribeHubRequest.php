<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeHub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $HubArn
 */
class DescribeHubRequest extends Request
{
    /**
     * @param array{HubArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
