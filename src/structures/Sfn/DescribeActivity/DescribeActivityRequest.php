<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeActivity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $activityArn
 */
class DescribeActivityRequest extends Request
{
    /**
     * @param array{activityArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
