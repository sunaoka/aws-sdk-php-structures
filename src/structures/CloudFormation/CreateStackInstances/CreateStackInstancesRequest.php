<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property list<string>|null $Accounts
 * @property Shapes\DeploymentTargets|null $DeploymentTargets
 * @property list<string> $Regions
 * @property list<Shapes\Parameter>|null $ParameterOverrides
 * @property Shapes\StackSetOperationPreferences|null $OperationPreferences
 * @property string|null $OperationId
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 */
class CreateStackInstancesRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     Accounts?: list<string>|null,
     *     DeploymentTargets?: Shapes\DeploymentTargets|null,
     *     Regions: list<string>,
     *     ParameterOverrides?: list<Shapes\Parameter>|null,
     *     OperationPreferences?: Shapes\StackSetOperationPreferences|null,
     *     OperationId?: string|null,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
