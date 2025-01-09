<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthenticationSummary $authentication
 * @property \Aws\Api\DateTimeResult $created
 * @property string $description
 * @property string $endpoint
 * @property string $grafanaToken
 * @property string $grafanaVersion
 * @property string $id
 * @property 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL' $licenseType
 * @property \Aws\Api\DateTimeResult $modified
 * @property string $name
 * @property list<'SNS'> $notificationDestinations
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'UPGRADING'|'DELETION_FAILED'|'CREATION_FAILED'|'UPDATE_FAILED'|'UPGRADE_FAILED'|'LICENSE_REMOVAL_FAILED'|'VERSION_UPDATING'|'VERSION_UPDATE_FAILED' $status
 * @property array<string, string> $tags
 */
class WorkspaceSummary extends Shape
{
    /**
     * @param array{
     *     authentication: AuthenticationSummary,
     *     created: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     endpoint: string,
     *     grafanaToken?: string,
     *     grafanaVersion: string,
     *     id: string,
     *     licenseType?: 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL',
     *     modified: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     notificationDestinations?: list<'SNS'>,
     *     status: 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'UPGRADING'|'DELETION_FAILED'|'CREATION_FAILED'|'UPDATE_FAILED'|'UPGRADE_FAILED'|'LICENSE_REMOVAL_FAILED'|'VERSION_UPDATING'|'VERSION_UPDATE_FAILED',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
