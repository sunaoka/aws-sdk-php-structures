<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Disabled'|'Daily' $assessmentSchedule
 * @property string $awsApplicationArn
 * @property string $clientToken
 * @property string $description
 * @property list<Shapes\EventSubscription> $eventSubscriptions
 * @property string $name
 * @property Shapes\PermissionModel $permissionModel
 * @property string $policyArn
 * @property array<string, string> $tags
 */
class CreateAppRequest extends Request
{
    /**
     * @param array{
     *     assessmentSchedule?: 'Disabled'|'Daily',
     *     awsApplicationArn?: string,
     *     clientToken?: string,
     *     description?: string,
     *     eventSubscriptions?: list<Shapes\EventSubscription>,
     *     name: string,
     *     permissionModel?: Shapes\PermissionModel,
     *     policyArn?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
