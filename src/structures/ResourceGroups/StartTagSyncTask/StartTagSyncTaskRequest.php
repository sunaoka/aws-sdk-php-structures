<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\StartTagSyncTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Group
 * @property string $TagKey
 * @property string $TagValue
 * @property string $RoleArn
 */
class StartTagSyncTaskRequest extends Request
{
    /**
     * @param array{
     *     Group: string,
     *     TagKey: string,
     *     TagValue: string,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
