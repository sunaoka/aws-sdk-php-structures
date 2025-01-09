<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $description
 * @property Shapes\PresignedUrlConfig $presignedUrlConfig
 * @property Shapes\JobExecutionsRolloutConfig $jobExecutionsRolloutConfig
 * @property Shapes\AbortConfig $abortConfig
 * @property Shapes\TimeoutConfig $timeoutConfig
 * @property string $namespaceId
 * @property Shapes\JobExecutionsRetryConfig $jobExecutionsRetryConfig
 */
class UpdateJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     description?: string,
     *     presignedUrlConfig?: Shapes\PresignedUrlConfig,
     *     jobExecutionsRolloutConfig?: Shapes\JobExecutionsRolloutConfig,
     *     abortConfig?: Shapes\AbortConfig,
     *     timeoutConfig?: Shapes\TimeoutConfig,
     *     namespaceId?: string,
     *     jobExecutionsRetryConfig?: Shapes\JobExecutionsRetryConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
