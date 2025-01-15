<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CURRENT_ACCOUNT'|'ORGANIZATION'|null $accountAccessType
 * @property Shapes\NetworkAccessConfiguration|null $networkAccessControl
 * @property string|null $organizationRoleName
 * @property 'CUSTOMER_MANAGED'|'SERVICE_MANAGED'|null $permissionType
 * @property bool|null $removeNetworkAccessConfiguration
 * @property bool|null $removeVpcConfiguration
 * @property string|null $stackSetName
 * @property Shapes\VpcConfiguration|null $vpcConfiguration
 * @property list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'>|null $workspaceDataSources
 * @property string|null $workspaceDescription
 * @property string $workspaceId
 * @property string|null $workspaceName
 * @property list<'SNS'>|null $workspaceNotificationDestinations
 * @property list<string>|null $workspaceOrganizationalUnits
 * @property string|null $workspaceRoleArn
 */
class UpdateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     accountAccessType?: 'CURRENT_ACCOUNT'|'ORGANIZATION'|null,
     *     networkAccessControl?: Shapes\NetworkAccessConfiguration|null,
     *     organizationRoleName?: string|null,
     *     permissionType?: 'CUSTOMER_MANAGED'|'SERVICE_MANAGED'|null,
     *     removeNetworkAccessConfiguration?: bool|null,
     *     removeVpcConfiguration?: bool|null,
     *     stackSetName?: string|null,
     *     vpcConfiguration?: Shapes\VpcConfiguration|null,
     *     workspaceDataSources?: list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'>|null,
     *     workspaceDescription?: string|null,
     *     workspaceId: string,
     *     workspaceName?: string|null,
     *     workspaceNotificationDestinations?: list<'SNS'>|null,
     *     workspaceOrganizationalUnits?: list<string>|null,
     *     workspaceRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
