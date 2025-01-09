<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property 'Disabled'|'Daily' $assessmentSchedule
 * @property bool $clearResiliencyPolicyArn
 * @property string $description
 * @property list<Shapes\EventSubscription> $eventSubscriptions
 * @property Shapes\PermissionModel $permissionModel
 * @property string $policyArn
 */
class UpdateAppRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     assessmentSchedule?: 'Disabled'|'Daily',
     *     clearResiliencyPolicyArn?: bool,
     *     description?: string,
     *     eventSubscriptions?: list<Shapes\EventSubscription>,
     *     permissionModel?: Shapes\PermissionModel,
     *     policyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
