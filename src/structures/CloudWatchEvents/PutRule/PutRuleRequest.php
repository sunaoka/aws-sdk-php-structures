<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ScheduleExpression
 * @property string|null $EventPattern
 * @property 'ENABLED'|'DISABLED'|null $State
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
     *     State?: 'ENABLED'|'DISABLED'|null,
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
