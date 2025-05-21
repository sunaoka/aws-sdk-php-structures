<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $taskId
 */
class GetDataSetExportTaskRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
