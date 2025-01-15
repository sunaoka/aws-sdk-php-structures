<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JobDetailsError|null $jobDetails
 * @property JobAttachmentDetailsError|null $jobAttachmentDetails
 * @property StepDetailsError|null $stepDetails
 * @property EnvironmentDetailsError|null $environmentDetails
 */
class GetJobEntityError extends Shape
{
    /**
     * @param array{
     *     jobDetails?: JobDetailsError|null,
     *     jobAttachmentDetails?: JobAttachmentDetailsError|null,
     *     stepDetails?: StepDetailsError|null,
     *     environmentDetails?: EnvironmentDetailsError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
