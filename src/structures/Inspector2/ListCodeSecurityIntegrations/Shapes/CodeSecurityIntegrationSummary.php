<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCodeSecurityIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationArn
 * @property string $name
 * @property 'GITLAB_SELF_MANAGED'|'GITHUB'|'GITHUB_ENTERPRISE_SERVER' $type
 * @property 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'INACTIVE'|'DISABLING'|'ESTABLISHING_CONNECTION_IN_PROGRESS'|'ESTABLISHING_CONNECTION_COMPLETED'|'ESTABLISHING_CONNECTION_FAILED'|'PENDING_MANIFEST_CODE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $createdOn
 * @property \Aws\Api\DateTimeResult $lastUpdateOn
 */
class CodeSecurityIntegrationSummary extends Shape
{
    /**
     * @param array{
     *     integrationArn: string,
     *     name: string,
     *     type: 'GITLAB_SELF_MANAGED'|'GITHUB'|'GITHUB_ENTERPRISE_SERVER',
     *     status: 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'INACTIVE'|'DISABLING'|'ESTABLISHING_CONNECTION_IN_PROGRESS'|'ESTABLISHING_CONNECTION_COMPLETED'|'ESTABLISHING_CONNECTION_FAILED'|'PENDING_MANIFEST_CODE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED',
     *     statusReason: string,
     *     createdOn: \Aws\Api\DateTimeResult,
     *     lastUpdateOn: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
