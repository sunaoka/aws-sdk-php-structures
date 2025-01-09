<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeServiceErrors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string $InstanceId
 * @property list<string> $ServiceErrorIds
 */
class DescribeServiceErrorsRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string,
     *     InstanceId?: string,
     *     ServiceErrorIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
