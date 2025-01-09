<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\UpdateNotificationRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'ENABLED'|'DISABLED' $Status
 * @property list<string> $EventTypeIds
 * @property list<Shapes\Target> $Targets
 * @property 'BASIC'|'FULL' $DetailType
 */
class UpdateNotificationRuleRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string,
     *     Status?: 'ENABLED'|'DISABLED',
     *     EventTypeIds?: list<string>,
     *     Targets?: list<Shapes\Target>,
     *     DetailType?: 'BASIC'|'FULL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
