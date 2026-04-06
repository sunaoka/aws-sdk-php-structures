<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthenticationSummary $authentication
 * @property \Aws\Api\DateTimeResult $created
 * @property string|null $description
 * @property string $endpoint
 * @property string|null $grafanaToken
 * @property string $grafanaVersion
 * @property string $id
 * @property 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL'|null $licenseType
 * @property \Aws\Api\DateTimeResult $modified
 * @property string|null $name
 * @property list<'SNS'>|null $notificationDestinations
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'UPGRADING'|'DELETION_FAILED'|'CREATION_FAILED'|'UPDATE_FAILED'|'UPGRADE_FAILED'|'LICENSE_REMOVAL_FAILED'|'VERSION_UPDATING'|'VERSION_UPDATE_FAILED' $status
 * @property array<string, string>|null $tags
 */
class WorkspaceSummary extends Shape
{
    /**
     * @param array{
     *     authentication: AuthenticationSummary,
     *     created: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     endpoint: string,
     *     grafanaToken?: string|null,
     *     grafanaVersion: string,
     *     id: string,
     *     licenseType?: 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL'|null,
     *     modified: \Aws\Api\DateTimeResult,
     *     name?: string|null,
     *     notificationDestinations?: list<'SNS'>|null,
     *     status: 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'UPGRADING'|'DELETION_FAILED'|'CREATION_FAILED'|'UPDATE_FAILED'|'UPGRADE_FAILED'|'LICENSE_REMOVAL_FAILED'|'VERSION_UPDATING'|'VERSION_UPDATE_FAILED',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
