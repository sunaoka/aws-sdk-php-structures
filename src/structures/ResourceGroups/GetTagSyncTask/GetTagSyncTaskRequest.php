<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetTagSyncTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskArn
 */
class GetTagSyncTaskRequest extends Request
{
    /**
     * @param array{TaskArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
