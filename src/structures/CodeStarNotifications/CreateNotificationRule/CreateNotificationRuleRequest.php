<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\CreateNotificationRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<string> $EventTypeIds
 * @property string $Resource
 * @property list<Shapes\Target> $Targets
 * @property 'BASIC'|'FULL' $DetailType
 * @property string|null $ClientRequestToken
 * @property array<string, string>|null $Tags
 * @property 'ENABLED'|'DISABLED'|null $Status
 */
class CreateNotificationRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EventTypeIds: list<string>,
     *     Resource: string,
     *     Targets: list<Shapes\Target>,
     *     DetailType: 'BASIC'|'FULL',
     *     ClientRequestToken?: string|null,
     *     Tags?: array<string, string>|null,
     *     Status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
