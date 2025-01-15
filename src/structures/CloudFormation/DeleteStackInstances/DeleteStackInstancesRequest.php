<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeleteStackInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property list<string>|null $Accounts
 * @property Shapes\DeploymentTargets|null $DeploymentTargets
 * @property list<string> $Regions
 * @property Shapes\StackSetOperationPreferences|null $OperationPreferences
 * @property bool $RetainStacks
 * @property string|null $OperationId
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 */
class DeleteStackInstancesRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     Accounts?: list<string>|null,
     *     DeploymentTargets?: Shapes\DeploymentTargets|null,
     *     Regions: list<string>,
     *     OperationPreferences?: Shapes\StackSetOperationPreferences|null,
     *     RetainStacks: bool,
     *     OperationId?: string|null,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
