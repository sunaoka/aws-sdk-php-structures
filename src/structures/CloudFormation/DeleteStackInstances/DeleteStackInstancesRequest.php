<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeleteStackInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property list<string> $Accounts
 * @property Shapes\DeploymentTargets $DeploymentTargets
 * @property list<string> $Regions
 * @property Shapes\StackSetOperationPreferences $OperationPreferences
 * @property bool $RetainStacks
 * @property string $OperationId
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 */
class DeleteStackInstancesRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     Accounts?: list<string>,
     *     DeploymentTargets?: Shapes\DeploymentTargets,
     *     Regions: list<string>,
     *     OperationPreferences?: Shapes\StackSetOperationPreferences,
     *     RetainStacks: bool,
     *     OperationId?: string,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
