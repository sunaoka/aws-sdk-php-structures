<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\CreateNotificationRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<string> $EventTypeIds
 * @property string $Resource
 * @property list<Shapes\Target> $Targets
 * @property 'BASIC'|'FULL' $DetailType
 * @property string $ClientRequestToken
 * @property array<string, string> $Tags
 * @property 'ENABLED'|'DISABLED' $Status
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
     *     ClientRequestToken?: string,
     *     Tags?: array<string, string>,
     *     Status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
