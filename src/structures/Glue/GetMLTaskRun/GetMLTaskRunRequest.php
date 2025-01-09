<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformId
 * @property string $TaskRunId
 */
class GetMLTaskRunRequest extends Request
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
