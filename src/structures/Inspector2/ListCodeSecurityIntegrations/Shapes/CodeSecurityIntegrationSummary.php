<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCodeSecurityIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationArn
 * @property string $name
 * @property 'GITLAB_SELF_MANAGED'|'GITHUB' $type
 * @property 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'INACTIVE'|'DISABLING' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $createdOn
 * @property \Aws\Api\DateTimeResult $lastUpdateOn
 * @property array<string, string>|null $tags
 */
class CodeSecurityIntegrationSummary extends Shape
{
    /**
     * @param array{
     *     integrationArn: string,
     *     name: string,
     *     type: 'GITLAB_SELF_MANAGED'|'GITHUB',
     *     status: 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'INACTIVE'|'DISABLING',
     *     statusReason: string,
     *     createdOn: \Aws\Api\DateTimeResult,
     *     lastUpdateOn: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
