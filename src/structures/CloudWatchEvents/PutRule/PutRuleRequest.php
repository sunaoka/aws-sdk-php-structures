<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ScheduleExpression
 * @property string $EventPattern
 * @property 'ENABLED'|'DISABLED' $State
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
     *     State?: 'ENABLED'|'DISABLED',
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
