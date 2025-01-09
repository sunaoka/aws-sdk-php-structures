<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ScheduleExpression
 * @property string $EventPattern
 * @property 'ENABLED'|'DISABLED'|'ENABLED_WITH_ALL_CLOUDTRAIL_MANAGEMENT_EVENTS' $State
 * @property string $Description
 * @property string $RoleArn
 * @property list<Shapes\Tag> $Tags
 * @property string $EventBusName
 */
class PutRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ScheduleExpression?: string,
     *     EventPattern?: string,
     *     State?: 'ENABLED'|'DISABLED'|'ENABLED_WITH_ALL_CLOUDTRAIL_MANAGEMENT_EVENTS',
     *     Description?: string,
     *     RoleArn?: string,
     *     Tags?: list<Shapes\Tag>,
     *     EventBusName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
