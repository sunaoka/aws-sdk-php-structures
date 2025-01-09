<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 */
class DescribeHubRequest extends Request
{
    /**
     * @param array{HubName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
