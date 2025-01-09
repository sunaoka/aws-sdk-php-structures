<?php

namespace Sunaoka\Aws\Structures\Glue\StartMLEvaluationTaskRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformId
 */
class StartMLEvaluationTaskRunRequest extends Request
{
    /**
     * @param array{TransformId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
