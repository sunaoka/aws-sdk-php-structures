<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ScheduleExpression
 * @property string|null $EventPattern
 * @property 'ENABLED'|'DISABLED'|'ENABLED_WITH_ALL_CLOUDTRAIL_MANAGEMENT_EVENTS'|null $State
 * @property string|null $Description
 * @property string|null $RoleArn
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $EventBusName
 */
class PutRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ScheduleExpression?: string|null,
     *     EventPattern?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|'ENABLED_WITH_ALL_CLOUDTRAIL_MANAGEMENT_EVENTS'|null,
     *     Description?: string|null,
     *     RoleArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     EventBusName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
