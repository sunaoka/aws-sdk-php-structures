<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JobDetailsEntity $jobDetails
 * @property JobAttachmentDetailsEntity $jobAttachmentDetails
 * @property StepDetailsEntity $stepDetails
 * @property EnvironmentDetailsEntity $environmentDetails
 */
class JobEntity extends Shape
{
    /**
     * @param array{
     *     jobDetails?: JobDetailsEntity,
     *     jobAttachmentDetails?: JobAttachmentDetailsEntity,
     *     stepDetails?: StepDetailsEntity,
     *     environmentDetails?: EnvironmentDetailsEntity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
