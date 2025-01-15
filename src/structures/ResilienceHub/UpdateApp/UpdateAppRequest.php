<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property 'Disabled'|'Daily'|null $assessmentSchedule
 * @property bool|null $clearResiliencyPolicyArn
 * @property string|null $description
 * @property list<Shapes\EventSubscription>|null $eventSubscriptions
 * @property Shapes\PermissionModel|null $permissionModel
 * @property string|null $policyArn
 */
class UpdateAppRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     assessmentSchedule?: 'Disabled'|'Daily'|null,
     *     clearResiliencyPolicyArn?: bool|null,
     *     description?: string|null,
     *     eventSubscriptions?: list<Shapes\EventSubscription>|null,
     *     permissionModel?: Shapes\PermissionModel|null,
     *     policyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
