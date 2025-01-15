<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateStackSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string|null $Description
 * @property string|null $TemplateBody
 * @property string|null $TemplateURL
 * @property bool|null $UsePreviousTemplate
 * @property list<Shapes\Parameter>|null $Parameters
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null $Capabilities
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\StackSetOperationPreferences|null $OperationPreferences
 * @property string|null $AdministrationRoleARN
 * @property string|null $ExecutionRoleName
 * @property Shapes\DeploymentTargets|null $DeploymentTargets
 * @property 'SERVICE_MANAGED'|'SELF_MANAGED'|null $PermissionModel
 * @property Shapes\AutoDeployment|null $AutoDeployment
 * @property string|null $OperationId
 * @property list<string>|null $Accounts
 * @property list<string>|null $Regions
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 * @property Shapes\ManagedExecution|null $ManagedExecution
 */
class UpdateStackSetRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     Description?: string|null,
     *     TemplateBody?: string|null,
     *     TemplateURL?: string|null,
     *     UsePreviousTemplate?: bool|null,
     *     Parameters?: list<Shapes\Parameter>|null,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     OperationPreferences?: Shapes\StackSetOperationPreferences|null,
     *     AdministrationRoleARN?: string|null,
     *     ExecutionRoleName?: string|null,
     *     DeploymentTargets?: Shapes\DeploymentTargets|null,
     *     PermissionModel?: 'SERVICE_MANAGED'|'SELF_MANAGED'|null,
     *     AutoDeployment?: Shapes\AutoDeployment|null,
     *     OperationId?: string|null,
     *     Accounts?: list<string>|null,
     *     Regions?: list<string>|null,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null,
     *     ManagedExecution?: Shapes\ManagedExecution|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
