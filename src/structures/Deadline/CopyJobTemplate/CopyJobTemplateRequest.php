<?php

namespace Sunaoka\Aws\Structures\Deadline\CopyJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $jobId
 * @property string $queueId
 * @property Shapes\S3Location $targetS3Location
 */
class CopyJobTemplateRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     jobId: string,
     *     queueId: string,
     *     targetS3Location: Shapes\S3Location
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
