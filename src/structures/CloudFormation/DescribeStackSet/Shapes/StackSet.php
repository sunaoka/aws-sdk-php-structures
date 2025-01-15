<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackSetName
 * @property string|null $StackSetId
 * @property string|null $Description
 * @property 'ACTIVE'|'DELETED'|null $Status
 * @property string|null $TemplateBody
 * @property list<Parameter>|null $Parameters
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null $Capabilities
 * @property list<Tag>|null $Tags
 * @property string|null $StackSetARN
 * @property string|null $AdministrationRoleARN
 * @property string|null $ExecutionRoleName
 * @property StackSetDriftDetectionDetails|null $StackSetDriftDetectionDetails
 * @property AutoDeployment|null $AutoDeployment
 * @property 'SERVICE_MANAGED'|'SELF_MANAGED'|null $PermissionModel
 * @property list<string>|null $OrganizationalUnitIds
 * @property ManagedExecution|null $ManagedExecution
 * @property list<string>|null $Regions
 */
class StackSet extends Shape
{
    /**
     * @param array{
     *     StackSetName?: string|null,
     *     StackSetId?: string|null,
     *     Description?: string|null,
     *     Status?: 'ACTIVE'|'DELETED'|null,
     *     TemplateBody?: string|null,
     *     Parameters?: list<Parameter>|null,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null,
     *     Tags?: list<Tag>|null,
     *     StackSetARN?: string|null,
     *     AdministrationRoleARN?: string|null,
     *     ExecutionRoleName?: string|null,
     *     StackSetDriftDetectionDetails?: StackSetDriftDetectionDetails|null,
     *     AutoDeployment?: AutoDeployment|null,
     *     PermissionModel?: 'SERVICE_MANAGED'|'SELF_MANAGED'|null,
     *     OrganizationalUnitIds?: list<string>|null,
     *     ManagedExecution?: ManagedExecution|null,
     *     Regions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
