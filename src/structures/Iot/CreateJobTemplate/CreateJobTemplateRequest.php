<?php

namespace Sunaoka\Aws\Structures\Iot\CreateJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobTemplateId
 * @property string $jobArn
 * @property string $documentSource
 * @property string $document
 * @property string $description
 * @property Shapes\PresignedUrlConfig $presignedUrlConfig
 * @property Shapes\JobExecutionsRolloutConfig $jobExecutionsRolloutConfig
 * @property Shapes\AbortConfig $abortConfig
 * @property Shapes\TimeoutConfig $timeoutConfig
 * @property list<Shapes\Tag> $tags
 * @property Shapes\JobExecutionsRetryConfig $jobExecutionsRetryConfig
 * @property list<Shapes\MaintenanceWindow> $maintenanceWindows
 * @property list<string> $destinationPackageVersions
 */
class CreateJobTemplateRequest extends Request
{
    /**
     * @param array{
     *     jobTemplateId: string,
     *     jobArn?: string,
     *     documentSource?: string,
     *     document?: string,
     *     description: string,
     *     presignedUrlConfig?: Shapes\PresignedUrlConfig,
     *     jobExecutionsRolloutConfig?: Shapes\JobExecutionsRolloutConfig,
     *     abortConfig?: Shapes\AbortConfig,
     *     timeoutConfig?: Shapes\TimeoutConfig,
     *     tags?: list<Shapes\Tag>,
     *     jobExecutionsRetryConfig?: Shapes\JobExecutionsRetryConfig,
     *     maintenanceWindows?: list<Shapes\MaintenanceWindow>,
     *     destinationPackageVersions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
