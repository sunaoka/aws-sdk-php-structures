<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\AssociateLicense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CURRENT_ACCOUNT'|'ORGANIZATION'|null $accountAccessType
 * @property AuthenticationSummary $authentication
 * @property \Aws\Api\DateTimeResult $created
 * @property list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'> $dataSources
 * @property string|null $description
 * @property string $endpoint
 * @property bool|null $freeTrialConsumed
 * @property \Aws\Api\DateTimeResult|null $freeTrialExpiration
 * @property string|null $grafanaToken
 * @property string $grafanaVersion
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $licenseExpiration
 * @property 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL'|null $licenseType
 * @property \Aws\Api\DateTimeResult $modified
 * @property string|null $name
 * @property NetworkAccessConfiguration|null $networkAccessControl
 * @property list<'SNS'>|null $notificationDestinations
 * @property string|null $organizationRoleName
 * @property list<string>|null $organizationalUnits
 * @property 'CUSTOMER_MANAGED'|'SERVICE_MANAGED'|null $permissionType
 * @property string|null $stackSetName
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'UPGRADING'|'DELETION_FAILED'|'CREATION_FAILED'|'UPDATE_FAILED'|'UPGRADE_FAILED'|'LICENSE_REMOVAL_FAILED'|'VERSION_UPDATING'|'VERSION_UPDATE_FAILED' $status
 * @property array<string, string>|null $tags
 * @property VpcConfiguration|null $vpcConfiguration
 * @property string|null $workspaceRoleArn
 */
class WorkspaceDescription extends Shape
{
    /**
     * @param array{
     *     accountAccessType?: 'CURRENT_ACCOUNT'|'ORGANIZATION'|null,
     *     authentication: AuthenticationSummary,
     *     created: \Aws\Api\DateTimeResult,
     *     dataSources: list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'>,
     *     description?: string|null,
     *     endpoint: string,
     *     freeTrialConsumed?: bool|null,
     *     freeTrialExpiration?: \Aws\Api\DateTimeResult|null,
     *     grafanaToken?: string|null,
     *     grafanaVersion: string,
     *     id: string,
     *     licenseExpiration?: \Aws\Api\DateTimeResult|null,
     *     licenseType?: 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL'|null,
     *     modified: \Aws\Api\DateTimeResult,
     *     name?: string|null,
     *     networkAccessControl?: NetworkAccessConfiguration|null,
     *     notificationDestinations?: list<'SNS'>|null,
     *     organizationRoleName?: string|null,
     *     organizationalUnits?: list<string>|null,
     *     permissionType?: 'CUSTOMER_MANAGED'|'SERVICE_MANAGED'|null,
     *     stackSetName?: string|null,
     *     status: 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'UPGRADING'|'DELETION_FAILED'|'CREATION_FAILED'|'UPDATE_FAILED'|'UPGRADE_FAILED'|'LICENSE_REMOVAL_FAILED'|'VERSION_UPDATING'|'VERSION_UPDATE_FAILED',
     *     tags?: array<string, string>|null,
     *     vpcConfiguration?: VpcConfiguration|null,
     *     workspaceRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
