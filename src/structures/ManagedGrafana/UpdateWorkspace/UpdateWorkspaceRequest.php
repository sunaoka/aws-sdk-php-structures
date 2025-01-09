<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CURRENT_ACCOUNT'|'ORGANIZATION' $accountAccessType
 * @property Shapes\NetworkAccessConfiguration $networkAccessControl
 * @property string $organizationRoleName
 * @property 'CUSTOMER_MANAGED'|'SERVICE_MANAGED' $permissionType
 * @property bool $removeNetworkAccessConfiguration
 * @property bool $removeVpcConfiguration
 * @property string $stackSetName
 * @property Shapes\VpcConfiguration $vpcConfiguration
 * @property list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'> $workspaceDataSources
 * @property string $workspaceDescription
 * @property string $workspaceId
 * @property string $workspaceName
 * @property list<'SNS'> $workspaceNotificationDestinations
 * @property list<string> $workspaceOrganizationalUnits
 * @property string $workspaceRoleArn
 */
class UpdateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     accountAccessType?: 'CURRENT_ACCOUNT'|'ORGANIZATION',
     *     networkAccessControl?: Shapes\NetworkAccessConfiguration,
     *     organizationRoleName?: string,
     *     permissionType?: 'CUSTOMER_MANAGED'|'SERVICE_MANAGED',
     *     removeNetworkAccessConfiguration?: bool,
     *     removeVpcConfiguration?: bool,
     *     stackSetName?: string,
     *     vpcConfiguration?: Shapes\VpcConfiguration,
     *     workspaceDataSources?: list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'>,
     *     workspaceDescription?: string,
     *     workspaceId: string,
     *     workspaceName?: string,
     *     workspaceNotificationDestinations?: list<'SNS'>,
     *     workspaceOrganizationalUnits?: list<string>,
     *     workspaceRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
