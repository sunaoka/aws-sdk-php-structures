<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateClassificationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property 'RUNNING'|'PAUSED'|'CANCELLED'|'COMPLETE'|'IDLE'|'USER_PAUSED' $jobStatus
 */
class UpdateClassificationJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     jobStatus: 'RUNNING'|'PAUSED'|'CANCELLED'|'COMPLETE'|'IDLE'|'USER_PAUSED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
