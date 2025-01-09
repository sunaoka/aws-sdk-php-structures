<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateStackSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string $Description
 * @property string $TemplateBody
 * @property string $TemplateURL
 * @property bool $UsePreviousTemplate
 * @property list<Shapes\Parameter> $Parameters
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'> $Capabilities
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\StackSetOperationPreferences $OperationPreferences
 * @property string $AdministrationRoleARN
 * @property string $ExecutionRoleName
 * @property Shapes\DeploymentTargets $DeploymentTargets
 * @property 'SERVICE_MANAGED'|'SELF_MANAGED' $PermissionModel
 * @property Shapes\AutoDeployment $AutoDeployment
 * @property string $OperationId
 * @property list<string> $Accounts
 * @property list<string> $Regions
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 * @property Shapes\ManagedExecution $ManagedExecution
 */
class UpdateStackSetRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     Description?: string,
     *     TemplateBody?: string,
     *     TemplateURL?: string,
     *     UsePreviousTemplate?: bool,
     *     Parameters?: list<Shapes\Parameter>,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>,
     *     Tags?: list<Shapes\Tag>,
     *     OperationPreferences?: Shapes\StackSetOperationPreferences,
     *     AdministrationRoleARN?: string,
     *     ExecutionRoleName?: string,
     *     DeploymentTargets?: Shapes\DeploymentTargets,
     *     PermissionModel?: 'SERVICE_MANAGED'|'SELF_MANAGED',
     *     AutoDeployment?: Shapes\AutoDeployment,
     *     OperationId?: string,
     *     Accounts?: list<string>,
     *     Regions?: list<string>,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN',
     *     ManagedExecution?: Shapes\ManagedExecution
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
