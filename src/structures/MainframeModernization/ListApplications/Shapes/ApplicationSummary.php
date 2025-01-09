<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationArn
 * @property string $applicationId
 * @property int $applicationVersion
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'Deploying'|'Deployed' $deploymentStatus
 * @property string $description
 * @property 'microfocus'|'bluage' $engineType
 * @property string $environmentId
 * @property \Aws\Api\DateTimeResult $lastStartTime
 * @property string $name
 * @property string $roleArn
 * @property 'Creating'|'Created'|'Available'|'Ready'|'Starting'|'Running'|'Stopping'|'Stopped'|'Failed'|'Deleting'|'Deleting From Environment' $status
 * @property 'Creating'|'Available'|'Failed' $versionStatus
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     applicationArn: string,
     *     applicationId: string,
     *     applicationVersion: int,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     deploymentStatus?: 'Deploying'|'Deployed',
     *     description?: string,
     *     engineType: 'microfocus'|'bluage',
     *     environmentId?: string,
     *     lastStartTime?: \Aws\Api\DateTimeResult,
     *     name: string,
     *     roleArn?: string,
     *     status: 'Creating'|'Created'|'Available'|'Ready'|'Starting'|'Running'|'Stopping'|'Stopped'|'Failed'|'Deleting'|'Deleting From Environment',
     *     versionStatus?: 'Creating'|'Available'|'Failed'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
