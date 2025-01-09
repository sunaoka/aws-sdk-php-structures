<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\CancelTagSyncTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskArn
 */
class CancelTagSyncTaskRequest extends Request
{
    /**
     * @param array{TaskArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
