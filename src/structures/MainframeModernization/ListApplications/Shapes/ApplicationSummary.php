<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationArn
 * @property string $applicationId
 * @property int<1, max> $applicationVersion
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'Deploying'|'Deployed'|null $deploymentStatus
 * @property string|null $description
 * @property 'microfocus'|'bluage' $engineType
 * @property string|null $environmentId
 * @property \Aws\Api\DateTimeResult|null $lastStartTime
 * @property string $name
 * @property string|null $roleArn
 * @property 'Creating'|'Created'|'Available'|'Ready'|'Starting'|'Running'|'Stopping'|'Stopped'|'Failed'|'Deleting'|'Deleting From Environment' $status
 * @property 'Creating'|'Available'|'Failed'|null $versionStatus
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     applicationArn: string,
     *     applicationId: string,
     *     applicationVersion: int<1, max>,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     deploymentStatus?: 'Deploying'|'Deployed'|null,
     *     description?: string|null,
     *     engineType: 'microfocus'|'bluage',
     *     environmentId?: string|null,
     *     lastStartTime?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     roleArn?: string|null,
     *     status: 'Creating'|'Created'|'Available'|'Ready'|'Starting'|'Running'|'Stopping'|'Stopped'|'Failed'|'Deleting'|'Deleting From Environment',
     *     versionStatus?: 'Creating'|'Available'|'Failed'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
