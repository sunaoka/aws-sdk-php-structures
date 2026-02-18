<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $created
 * @property string|null $description
 * @property string $endpoint
 * @property string $grafanaVersion
 * @property string $id
 * @property \Aws\Api\DateTimeResult $modified
 * @property string|null $name
 * @property list<'SNS'>|null $notificationDestinations
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'UPGRADING'|'DELETION_FAILED'|'CREATION_FAILED'|'UPDATE_FAILED'|'UPGRADE_FAILED'|'LICENSE_REMOVAL_FAILED'|'VERSION_UPDATING'|'VERSION_UPDATE_FAILED' $status
 * @property AuthenticationSummary $authentication
 * @property array<string, string>|null $tags
 * @property 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL'|null $licenseType
 * @property string|null $grafanaToken
 */
class WorkspaceSummary extends Shape
{
    /**
     * @param array{
     *     created: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     endpoint: string,
     *     grafanaVersion: string,
     *     id: string,
     *     modified: \Aws\Api\DateTimeResult,
     *     name?: string|null,
     *     notificationDestinations?: list<'SNS'>|null,
     *     status: 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'UPGRADING'|'DELETION_FAILED'|'CREATION_FAILED'|'UPDATE_FAILED'|'UPGRADE_FAILED'|'LICENSE_REMOVAL_FAILED'|'VERSION_UPDATING'|'VERSION_UPDATE_FAILED',
     *     authentication: AuthenticationSummary,
     *     tags?: array<string, string>|null,
     *     licenseType?: 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL'|null,
     *     grafanaToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
