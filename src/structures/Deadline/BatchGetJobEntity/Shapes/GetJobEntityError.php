<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnvironmentDetailsError|null $environmentDetails
 * @property JobAttachmentDetailsError|null $jobAttachmentDetails
 * @property JobDetailsError|null $jobDetails
 * @property StepDetailsError|null $stepDetails
 */
class GetJobEntityError extends Shape
{
    /**
     * @param array{
     *     environmentDetails?: EnvironmentDetailsError|null,
     *     jobAttachmentDetails?: JobAttachmentDetailsError|null,
     *     jobDetails?: JobDetailsError|null,
     *     stepDetails?: StepDetailsError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
