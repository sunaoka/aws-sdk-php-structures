<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string $Description
 * @property string $TemplateBody
 * @property string $TemplateURL
 * @property string $StackId
 * @property list<Shapes\Parameter> $Parameters
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'> $Capabilities
 * @property list<Shapes\Tag> $Tags
 * @property string $AdministrationRoleARN
 * @property string $ExecutionRoleName
 * @property 'SERVICE_MANAGED'|'SELF_MANAGED' $PermissionModel
 * @property Shapes\AutoDeployment $AutoDeployment
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 * @property string $ClientRequestToken
 * @property Shapes\ManagedExecution $ManagedExecution
 */
class CreateStackSetRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     Description?: string,
     *     TemplateBody?: string,
     *     TemplateURL?: string,
     *     StackId?: string,
     *     Parameters?: list<Shapes\Parameter>,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>,
     *     Tags?: list<Shapes\Tag>,
     *     AdministrationRoleARN?: string,
     *     ExecutionRoleName?: string,
     *     PermissionModel?: 'SERVICE_MANAGED'|'SELF_MANAGED',
     *     AutoDeployment?: Shapes\AutoDeployment,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN',
     *     ClientRequestToken?: string,
     *     ManagedExecution?: Shapes\ManagedExecution
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
