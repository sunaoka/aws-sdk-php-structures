<?php

namespace Sunaoka\Aws\Structures\Glue\CancelMLTaskRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformId
 * @property string $TaskRunId
 */
class CancelMLTaskRunRequest extends Request
{
    /**
     * @param array{
     *     TransformId: string,
     *     TaskRunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
