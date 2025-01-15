<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string|null $Description
 * @property string|null $TemplateBody
 * @property string|null $TemplateURL
 * @property string|null $StackId
 * @property list<Shapes\Parameter>|null $Parameters
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null $Capabilities
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $AdministrationRoleARN
 * @property string|null $ExecutionRoleName
 * @property 'SERVICE_MANAGED'|'SELF_MANAGED'|null $PermissionModel
 * @property Shapes\AutoDeployment|null $AutoDeployment
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 * @property string|null $ClientRequestToken
 * @property Shapes\ManagedExecution|null $ManagedExecution
 */
class CreateStackSetRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     Description?: string|null,
     *     TemplateBody?: string|null,
     *     TemplateURL?: string|null,
     *     StackId?: string|null,
     *     Parameters?: list<Shapes\Parameter>|null,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     AdministrationRoleARN?: string|null,
     *     ExecutionRoleName?: string|null,
     *     PermissionModel?: 'SERVICE_MANAGED'|'SELF_MANAGED'|null,
     *     AutoDeployment?: Shapes\AutoDeployment|null,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null,
     *     ClientRequestToken?: string|null,
     *     ManagedExecution?: Shapes\ManagedExecution|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
