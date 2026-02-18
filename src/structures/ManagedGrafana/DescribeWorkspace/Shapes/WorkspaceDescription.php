<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CURRENT_ACCOUNT'|'ORGANIZATION'|null $accountAccessType
 * @property \Aws\Api\DateTimeResult $created
 * @property list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'> $dataSources
 * @property string|null $description
 * @property string $endpoint
 * @property string $grafanaVersion
 * @property string $id
 * @property \Aws\Api\DateTimeResult $modified
 * @property string|null $name
 * @property string|null $organizationRoleName
 * @property list<'SNS'>|null $notificationDestinations
 * @property list<string>|null $organizationalUnits
 * @property 'CUSTOMER_MANAGED'|'SERVICE_MANAGED'|null $permissionType
 * @property string|null $stackSetName
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'UPGRADING'|'DELETION_FAILED'|'CREATION_FAILED'|'UPDATE_FAILED'|'UPGRADE_FAILED'|'LICENSE_REMOVAL_FAILED'|'VERSION_UPDATING'|'VERSION_UPDATE_FAILED' $status
 * @property string|null $workspaceRoleArn
 * @property 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL'|null $licenseType
 * @property bool|null $freeTrialConsumed
 * @property \Aws\Api\DateTimeResult|null $licenseExpiration
 * @property \Aws\Api\DateTimeResult|null $freeTrialExpiration
 * @property AuthenticationSummary $authentication
 * @property array<string, string>|null $tags
 * @property VpcConfiguration|null $vpcConfiguration
 * @property NetworkAccessConfiguration|null $networkAccessControl
 * @property string|null $grafanaToken
 * @property string|null $kmsKeyId
 */
class WorkspaceDescription extends Shape
{
    /**
     * @param array{
     *     accountAccessType?: 'CURRENT_ACCOUNT'|'ORGANIZATION'|null,
     *     created: \Aws\Api\DateTimeResult,
     *     dataSources: list<'AMAZON_OPENSEARCH_SERVICE'|'CLOUDWATCH'|'PROMETHEUS'|'XRAY'|'TIMESTREAM'|'SITEWISE'|'ATHENA'|'REDSHIFT'|'TWINMAKER'>,
     *     description?: string|null,
     *     endpoint: string,
     *     grafanaVersion: string,
     *     id: string,
     *     modified: \Aws\Api\DateTimeResult,
     *     name?: string|null,
     *     organizationRoleName?: string|null,
     *     notificationDestinations?: list<'SNS'>|null,
     *     organizationalUnits?: list<string>|null,
     *     permissionType?: 'CUSTOMER_MANAGED'|'SERVICE_MANAGED'|null,
     *     stackSetName?: string|null,
     *     status: 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'UPGRADING'|'DELETION_FAILED'|'CREATION_FAILED'|'UPDATE_FAILED'|'UPGRADE_FAILED'|'LICENSE_REMOVAL_FAILED'|'VERSION_UPDATING'|'VERSION_UPDATE_FAILED',
     *     workspaceRoleArn?: string|null,
     *     licenseType?: 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL'|null,
     *     freeTrialConsumed?: bool|null,
     *     licenseExpiration?: \Aws\Api\DateTimeResult|null,
     *     freeTrialExpiration?: \Aws\Api\DateTimeResult|null,
     *     authentication: AuthenticationSummary,
     *     tags?: array<string, string>|null,
     *     vpcConfiguration?: VpcConfiguration|null,
     *     networkAccessControl?: NetworkAccessConfiguration|null,
     *     grafanaToken?: string|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
