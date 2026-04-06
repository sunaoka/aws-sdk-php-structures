<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $EventPattern
 * @property 'ENABLED'|'DISABLED'|'ENABLED_WITH_ALL_CLOUDTRAIL_MANAGEMENT_EVENTS'|null $State
 * @property string|null $Description
 * @property string|null $ScheduleExpression
 * @property string|null $RoleArn
 * @property string|null $ManagedBy
 * @property string|null $EventBusName
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     EventPattern?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|'ENABLED_WITH_ALL_CLOUDTRAIL_MANAGEMENT_EVENTS'|null,
     *     Description?: string|null,
     *     ScheduleExpression?: string|null,
     *     RoleArn?: string|null,
     *     ManagedBy?: string|null,
     *     EventBusName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
