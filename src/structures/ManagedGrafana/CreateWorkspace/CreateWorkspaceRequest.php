<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CURRENT_ACCOUNT'|'ORGANIZATION' $accountAccessType
 * @property list<'AWS_SSO'|'SAML'> $authenticationProviders
 * @property string|null $clientToken
 * @property string|null $configuration
 * @property string|null $grafanaVersion
 * @property Shapes\NetworkAccessConfiguration|null $networkAccessControl
 * @property string|null $organizationRoleName
 * @property 'CUSTOMER_MANAGED'|'SERVICE_MANAGED' $permissionType
 * @property string|null $stackSetName
 * @property array<string, string>|null $tags
 * @property Shapes\VpcConfiguration|null $vpcConfiguration
 * @property list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'>|null $workspaceDataSources
 * @property string|null $workspaceDescription
 * @property string|null $workspaceName
 * @property list<'SNS'>|null $workspaceNotificationDestinations
 * @property list<string>|null $workspaceOrganizationalUnits
 * @property string|null $workspaceRoleArn
 */
class CreateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     accountAccessType: 'CURRENT_ACCOUNT'|'ORGANIZATION',
     *     authenticationProviders: list<'AWS_SSO'|'SAML'>,
     *     clientToken?: string|null,
     *     configuration?: string|null,
     *     grafanaVersion?: string|null,
     *     networkAccessControl?: Shapes\NetworkAccessConfiguration|null,
     *     organizationRoleName?: string|null,
     *     permissionType: 'CUSTOMER_MANAGED'|'SERVICE_MANAGED',
     *     stackSetName?: string|null,
     *     tags?: array<string, string>|null,
     *     vpcConfiguration?: Shapes\VpcConfiguration|null,
     *     workspaceDataSources?: list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'>|null,
     *     workspaceDescription?: string|null,
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
