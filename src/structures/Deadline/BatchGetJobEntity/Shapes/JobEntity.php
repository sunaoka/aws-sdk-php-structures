<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JobDetailsEntity|null $jobDetails
 * @property JobAttachmentDetailsEntity|null $jobAttachmentDetails
 * @property StepDetailsEntity|null $stepDetails
 * @property EnvironmentDetailsEntity|null $environmentDetails
 */
class JobEntity extends Shape
{
    /**
     * @param array{
     *     jobDetails?: JobDetailsEntity|null,
     *     jobAttachmentDetails?: JobAttachmentDetailsEntity|null,
     *     stepDetails?: StepDetailsEntity|null,
     *     environmentDetails?: EnvironmentDetailsEntity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
