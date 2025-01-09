<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\ResumeBatchLoadTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskId
 */
class ResumeBatchLoadTaskRequest extends Request
{
    /**
     * @param array{TaskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
