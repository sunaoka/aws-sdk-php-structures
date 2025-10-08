<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitServiceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $jobQueue
 * @property Shapes\ServiceJobRetryStrategy|null $retryStrategy
 * @property int|null $schedulingPriority
 * @property string $serviceRequestPayload
 * @property 'SAGEMAKER_TRAINING' $serviceJobType
 * @property string|null $shareIdentifier
 * @property Shapes\ServiceJobTimeout|null $timeoutConfig
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class SubmitServiceJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     jobQueue: string,
     *     retryStrategy?: Shapes\ServiceJobRetryStrategy|null,
     *     schedulingPriority?: int|null,
     *     serviceRequestPayload: string,
     *     serviceJobType: 'SAGEMAKER_TRAINING',
     *     shareIdentifier?: string|null,
     *     timeoutConfig?: Shapes\ServiceJobTimeout|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
