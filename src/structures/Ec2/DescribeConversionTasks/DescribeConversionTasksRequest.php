<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeConversionTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $ConversionTaskIds
 */
class DescribeConversionTasksRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ConversionTaskIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
