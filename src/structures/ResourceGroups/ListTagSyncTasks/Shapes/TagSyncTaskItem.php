<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListTagSyncTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupArn
 * @property string|null $GroupName
 * @property string|null $TaskArn
 * @property string|null $TagKey
 * @property string|null $TagValue
 * @property string|null $RoleArn
 * @property 'ACTIVE'|'ERROR'|null $Status
 * @property string|null $ErrorMessage
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class TagSyncTaskItem extends Shape
{
    /**
     * @param array{
     *     GroupArn?: string|null,
     *     GroupName?: string|null,
     *     TaskArn?: string|null,
     *     TagKey?: string|null,
     *     TagValue?: string|null,
     *     RoleArn?: string|null,
     *     Status?: 'ACTIVE'|'ERROR'|null,
     *     ErrorMessage?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
