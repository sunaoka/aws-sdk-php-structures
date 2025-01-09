<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobTemplateArn
 * @property string $jobTemplateId
 * @property string $description
 * @property string $documentSource
 * @property string $document
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Shapes\PresignedUrlConfig $presignedUrlConfig
 * @property Shapes\JobExecutionsRolloutConfig $jobExecutionsRolloutConfig
 * @property Shapes\AbortConfig $abortConfig
 * @property Shapes\TimeoutConfig $timeoutConfig
 * @property Shapes\JobExecutionsRetryConfig $jobExecutionsRetryConfig
 * @property list<Shapes\MaintenanceWindow> $maintenanceWindows
 * @property list<string> $destinationPackageVersions
 */
class DescribeJobTemplateResponse extends Response
{
}
