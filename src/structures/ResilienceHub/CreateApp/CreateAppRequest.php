<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Disabled'|'Daily'|null $assessmentSchedule
 * @property string|null $awsApplicationArn
 * @property string|null $clientToken
 * @property string|null $description
 * @property list<Shapes\EventSubscription>|null $eventSubscriptions
 * @property string $name
 * @property Shapes\PermissionModel|null $permissionModel
 * @property string|null $policyArn
 * @property array<string, string>|null $tags
 */
class CreateAppRequest extends Request
{
    /**
     * @param array{
     *     assessmentSchedule?: 'Disabled'|'Daily'|null,
     *     awsApplicationArn?: string|null,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     eventSubscriptions?: list<Shapes\EventSubscription>|null,
     *     name: string,
     *     permissionModel?: Shapes\PermissionModel|null,
     *     policyArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
