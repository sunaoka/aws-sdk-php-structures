<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribePublisher;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $PublisherId
 */
class DescribePublisherRequest extends Request
{
    /**
     * @param array{PublisherId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
