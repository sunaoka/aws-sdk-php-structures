<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\StartTagSyncTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Group
 * @property string|null $TagKey
 * @property string|null $TagValue
 * @property Shapes\ResourceQuery|null $ResourceQuery
 * @property string $RoleArn
 */
class StartTagSyncTaskRequest extends Request
{
    /**
     * @param array{
     *     Group: string,
     *     TagKey?: string|null,
     *     TagValue?: string|null,
     *     ResourceQuery?: Shapes\ResourceQuery|null,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
