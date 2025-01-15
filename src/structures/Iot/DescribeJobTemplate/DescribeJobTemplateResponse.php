<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $jobTemplateArn
 * @property string|null $jobTemplateId
 * @property string|null $description
 * @property string|null $documentSource
 * @property string|null $document
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property Shapes\PresignedUrlConfig|null $presignedUrlConfig
 * @property Shapes\JobExecutionsRolloutConfig|null $jobExecutionsRolloutConfig
 * @property Shapes\AbortConfig|null $abortConfig
 * @property Shapes\TimeoutConfig|null $timeoutConfig
 * @property Shapes\JobExecutionsRetryConfig|null $jobExecutionsRetryConfig
 * @property list<Shapes\MaintenanceWindow>|null $maintenanceWindows
 * @property list<string>|null $destinationPackageVersions
 */
class DescribeJobTemplateResponse extends Response
{
}
