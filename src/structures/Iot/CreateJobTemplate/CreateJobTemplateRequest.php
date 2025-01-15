<?php

namespace Sunaoka\Aws\Structures\Iot\CreateJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobTemplateId
 * @property string|null $jobArn
 * @property string|null $documentSource
 * @property string|null $document
 * @property string $description
 * @property Shapes\PresignedUrlConfig|null $presignedUrlConfig
 * @property Shapes\JobExecutionsRolloutConfig|null $jobExecutionsRolloutConfig
 * @property Shapes\AbortConfig|null $abortConfig
 * @property Shapes\TimeoutConfig|null $timeoutConfig
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\JobExecutionsRetryConfig|null $jobExecutionsRetryConfig
 * @property list<Shapes\MaintenanceWindow>|null $maintenanceWindows
 * @property list<string>|null $destinationPackageVersions
 */
class CreateJobTemplateRequest extends Request
{
    /**
     * @param array{
     *     jobTemplateId: string,
     *     jobArn?: string|null,
     *     documentSource?: string|null,
     *     document?: string|null,
     *     description: string,
     *     presignedUrlConfig?: Shapes\PresignedUrlConfig|null,
     *     jobExecutionsRolloutConfig?: Shapes\JobExecutionsRolloutConfig|null,
     *     abortConfig?: Shapes\AbortConfig|null,
     *     timeoutConfig?: Shapes\TimeoutConfig|null,
     *     tags?: list<Shapes\Tag>|null,
     *     jobExecutionsRetryConfig?: Shapes\JobExecutionsRetryConfig|null,
     *     maintenanceWindows?: list<Shapes\MaintenanceWindow>|null,
     *     destinationPackageVersions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
