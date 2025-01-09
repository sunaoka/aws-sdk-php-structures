<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskId
 */
class DescribeBatchLoadTaskRequest extends Request
{
    /**
     * @param array{TaskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
