<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\UpdateNotificationRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $Name
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property list<string>|null $EventTypeIds
 * @property list<Shapes\Target>|null $Targets
 * @property 'BASIC'|'FULL'|null $DetailType
 */
class UpdateNotificationRuleRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     EventTypeIds?: list<string>|null,
     *     Targets?: list<Shapes\Target>|null,
     *     DetailType?: 'BASIC'|'FULL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
