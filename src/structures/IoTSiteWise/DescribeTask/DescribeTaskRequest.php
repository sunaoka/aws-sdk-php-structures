<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $taskName
 * @property string|null $taskVersion
 */
class DescribeTaskRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     taskName: string,
     *     taskVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
