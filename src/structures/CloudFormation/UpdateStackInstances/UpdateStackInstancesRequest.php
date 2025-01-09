<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateStackInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property list<string> $Accounts
 * @property Shapes\DeploymentTargets $DeploymentTargets
 * @property list<string> $Regions
 * @property list<Shapes\Parameter> $ParameterOverrides
 * @property Shapes\StackSetOperationPreferences $OperationPreferences
 * @property string $OperationId
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 */
class UpdateStackInstancesRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     Accounts?: list<string>,
     *     DeploymentTargets?: Shapes\DeploymentTargets,
     *     Regions: list<string>,
     *     ParameterOverrides?: list<Shapes\Parameter>,
     *     OperationPreferences?: Shapes\StackSetOperationPreferences,
     *     OperationId?: string,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
