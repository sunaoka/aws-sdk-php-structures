<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListTagSyncTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupArn
 * @property string $GroupName
 * @property string $TaskArn
 * @property string $TagKey
 * @property string $TagValue
 * @property string $RoleArn
 * @property 'ACTIVE'|'ERROR' $Status
 * @property string $ErrorMessage
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class TagSyncTaskItem extends Shape
{
    /**
     * @param array{
     *     GroupArn?: string,
     *     GroupName?: string,
     *     TaskArn?: string,
     *     TagKey?: string,
     *     TagValue?: string,
     *     RoleArn?: string,
     *     Status?: 'ACTIVE'|'ERROR',
     *     ErrorMessage?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
