<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string|null $description
 * @property Shapes\PresignedUrlConfig|null $presignedUrlConfig
 * @property Shapes\JobExecutionsRolloutConfig|null $jobExecutionsRolloutConfig
 * @property Shapes\AbortConfig|null $abortConfig
 * @property Shapes\TimeoutConfig|null $timeoutConfig
 * @property string|null $namespaceId
 * @property Shapes\JobExecutionsRetryConfig|null $jobExecutionsRetryConfig
 */
class UpdateJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     description?: string|null,
     *     presignedUrlConfig?: Shapes\PresignedUrlConfig|null,
     *     jobExecutionsRolloutConfig?: Shapes\JobExecutionsRolloutConfig|null,
     *     abortConfig?: Shapes\AbortConfig|null,
     *     timeoutConfig?: Shapes\TimeoutConfig|null,
     *     namespaceId?: string|null,
     *     jobExecutionsRetryConfig?: Shapes\JobExecutionsRetryConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
