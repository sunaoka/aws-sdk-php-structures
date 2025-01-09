<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CURRENT_ACCOUNT'|'ORGANIZATION' $accountAccessType
 * @property list<'AWS_SSO'|'SAML'> $authenticationProviders
 * @property string $clientToken
 * @property string $configuration
 * @property string $grafanaVersion
 * @property Shapes\NetworkAccessConfiguration $networkAccessControl
 * @property string $organizationRoleName
 * @property 'CUSTOMER_MANAGED'|'SERVICE_MANAGED' $permissionType
 * @property string $stackSetName
 * @property array<string, string> $tags
 * @property Shapes\VpcConfiguration $vpcConfiguration
 * @property list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'> $workspaceDataSources
 * @property string $workspaceDescription
 * @property string $workspaceName
 * @property list<'SNS'> $workspaceNotificationDestinations
 * @property list<string> $workspaceOrganizationalUnits
 * @property string $workspaceRoleArn
 */
class CreateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     accountAccessType: 'CURRENT_ACCOUNT'|'ORGANIZATION',
     *     authenticationProviders: list<'AWS_SSO'|'SAML'>,
     *     clientToken?: string,
     *     configuration?: string,
     *     grafanaVersion?: string,
     *     networkAccessControl?: Shapes\NetworkAccessConfiguration,
     *     organizationRoleName?: string,
     *     permissionType: 'CUSTOMER_MANAGED'|'SERVICE_MANAGED',
     *     stackSetName?: string,
     *     tags?: array<string, string>,
     *     vpcConfiguration?: Shapes\VpcConfiguration,
     *     workspaceDataSources?: list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'>,
     *     workspaceDescription?: string,
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
