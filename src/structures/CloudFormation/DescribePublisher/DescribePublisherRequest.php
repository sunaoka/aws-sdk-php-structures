<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribePublisher;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PublisherId
 */
class DescribePublisherRequest extends Request
{
    /**
     * @param array{PublisherId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
