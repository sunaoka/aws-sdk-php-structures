<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $EventPattern
 * @property 'ENABLED'|'DISABLED'|'ENABLED_WITH_ALL_CLOUDTRAIL_MANAGEMENT_EVENTS' $State
 * @property string $Description
 * @property string $ScheduleExpression
 * @property string $RoleArn
 * @property string $ManagedBy
 * @property string $EventBusName
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     EventPattern?: string,
     *     State?: 'ENABLED'|'DISABLED'|'ENABLED_WITH_ALL_CLOUDTRAIL_MANAGEMENT_EVENTS',
     *     Description?: string,
     *     ScheduleExpression?: string,
     *     RoleArn?: string,
     *     ManagedBy?: string,
     *     EventBusName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
