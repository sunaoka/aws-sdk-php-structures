<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackSetName
 * @property string $StackSetId
 * @property string $Description
 * @property 'ACTIVE'|'DELETED' $Status
 * @property string $TemplateBody
 * @property list<Parameter> $Parameters
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'> $Capabilities
 * @property list<Tag> $Tags
 * @property string $StackSetARN
 * @property string $AdministrationRoleARN
 * @property string $ExecutionRoleName
 * @property StackSetDriftDetectionDetails $StackSetDriftDetectionDetails
 * @property AutoDeployment $AutoDeployment
 * @property 'SERVICE_MANAGED'|'SELF_MANAGED' $PermissionModel
 * @property list<string> $OrganizationalUnitIds
 * @property ManagedExecution $ManagedExecution
 * @property list<string> $Regions
 */
class StackSet extends Shape
{
    /**
     * @param array{
     *     StackSetName?: string,
     *     StackSetId?: string,
     *     Description?: string,
     *     Status?: 'ACTIVE'|'DELETED',
     *     TemplateBody?: string,
     *     Parameters?: list<Parameter>,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>,
     *     Tags?: list<Tag>,
     *     StackSetARN?: string,
     *     AdministrationRoleARN?: string,
     *     ExecutionRoleName?: string,
     *     StackSetDriftDetectionDetails?: StackSetDriftDetectionDetails,
     *     AutoDeployment?: AutoDeployment,
     *     PermissionModel?: 'SERVICE_MANAGED'|'SELF_MANAGED',
     *     OrganizationalUnitIds?: list<string>,
     *     ManagedExecution?: ManagedExecution,
     *     Regions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
