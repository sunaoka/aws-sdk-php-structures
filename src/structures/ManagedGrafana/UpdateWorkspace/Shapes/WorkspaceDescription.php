<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CURRENT_ACCOUNT'|'ORGANIZATION' $accountAccessType
 * @property AuthenticationSummary $authentication
 * @property \Aws\Api\DateTimeResult $created
 * @property list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'> $dataSources
 * @property string $description
 * @property string $endpoint
 * @property bool $freeTrialConsumed
 * @property \Aws\Api\DateTimeResult $freeTrialExpiration
 * @property string $grafanaToken
 * @property string $grafanaVersion
 * @property string $id
 * @property \Aws\Api\DateTimeResult $licenseExpiration
 * @property 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL' $licenseType
 * @property \Aws\Api\DateTimeResult $modified
 * @property string $name
 * @property NetworkAccessConfiguration $networkAccessControl
 * @property list<'SNS'> $notificationDestinations
 * @property string $organizationRoleName
 * @property list<string> $organizationalUnits
 * @property 'CUSTOMER_MANAGED'|'SERVICE_MANAGED' $permissionType
 * @property string $stackSetName
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'UPGRADING'|'DELETION_FAILED'|'CREATION_FAILED'|'UPDATE_FAILED'|'UPGRADE_FAILED'|'LICENSE_REMOVAL_FAILED'|'VERSION_UPDATING'|'VERSION_UPDATE_FAILED' $status
 * @property array<string, string> $tags
 * @property VpcConfiguration $vpcConfiguration
 * @property string $workspaceRoleArn
 */
class WorkspaceDescription extends Shape
{
    /**
     * @param array{
     *     accountAccessType?: 'CURRENT_ACCOUNT'|'ORGANIZATION',
     *     authentication: AuthenticationSummary,
     *     created: \Aws\Api\DateTimeResult,
     *     dataSources: list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'>,
     *     description?: string,
     *     endpoint: string,
     *     freeTrialConsumed?: bool,
     *     freeTrialExpiration?: \Aws\Api\DateTimeResult,
     *     grafanaToken?: string,
     *     grafanaVersion: string,
     *     id: string,
     *     licenseExpiration?: \Aws\Api\DateTimeResult,
     *     licenseType?: 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL',
     *     modified: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     networkAccessControl?: NetworkAccessConfiguration,
     *     notificationDestinations?: list<'SNS'>,
     *     organizationRoleName?: string,
     *     organizationalUnits?: list<string>,
     *     permissionType?: 'CUSTOMER_MANAGED'|'SERVICE_MANAGED',
     *     stackSetName?: string,
     *     status: 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'UPGRADING'|'DELETION_FAILED'|'CREATION_FAILED'|'UPDATE_FAILED'|'UPGRADE_FAILED'|'LICENSE_REMOVAL_FAILED'|'VERSION_UPDATING'|'VERSION_UPDATE_FAILED',
     *     tags?: array<string, string>,
     *     vpcConfiguration?: VpcConfiguration,
     *     workspaceRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
