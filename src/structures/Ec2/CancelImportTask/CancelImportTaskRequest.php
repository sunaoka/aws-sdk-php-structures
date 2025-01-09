<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CancelReason
 * @property bool $DryRun
 * @property string $ImportTaskId
 */
class CancelImportTaskRequest extends Request
{
    /**
     * @param array{
     *     CancelReason?: string,
     *     DryRun?: bool,
     *     ImportTaskId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
