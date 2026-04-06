<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeConversionTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ConversionTaskIds
 * @property bool|null $DryRun
 */
class DescribeConversionTasksRequest extends Request
{
    /**
     * @param array{
     *     ConversionTaskIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
