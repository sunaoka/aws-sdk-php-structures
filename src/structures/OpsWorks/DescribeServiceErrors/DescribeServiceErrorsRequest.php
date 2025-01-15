<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeServiceErrors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackId
 * @property string|null $InstanceId
 * @property list<string>|null $ServiceErrorIds
 */
class DescribeServiceErrorsRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     InstanceId?: string|null,
     *     ServiceErrorIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
