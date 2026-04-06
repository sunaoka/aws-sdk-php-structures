<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnvironmentDetailsEntity|null $environmentDetails
 * @property JobAttachmentDetailsEntity|null $jobAttachmentDetails
 * @property JobDetailsEntity|null $jobDetails
 * @property StepDetailsEntity|null $stepDetails
 */
class JobEntity extends Shape
{
    /**
     * @param array{
     *     environmentDetails?: EnvironmentDetailsEntity|null,
     *     jobAttachmentDetails?: JobAttachmentDetailsEntity|null,
     *     jobDetails?: JobDetailsEntity|null,
     *     stepDetails?: StepDetailsEntity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
