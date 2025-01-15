<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeConversionTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $ConversionTaskIds
 */
class DescribeConversionTasksRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ConversionTaskIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
