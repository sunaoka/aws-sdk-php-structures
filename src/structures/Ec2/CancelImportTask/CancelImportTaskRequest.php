<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CancelReason
 * @property bool|null $DryRun
 * @property string|null $ImportTaskId
 */
class CancelImportTaskRequest extends Request
{
    /**
     * @param array{
     *     CancelReason?: string|null,
     *     DryRun?: bool|null,
     *     ImportTaskId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
