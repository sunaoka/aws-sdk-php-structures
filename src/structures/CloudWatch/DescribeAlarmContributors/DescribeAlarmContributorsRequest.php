<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmContributors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlarmName
 * @property string|null $NextToken
 */
class DescribeAlarmContributorsRequest extends Request
{
    /**
     * @param array{
     *     AlarmName: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
