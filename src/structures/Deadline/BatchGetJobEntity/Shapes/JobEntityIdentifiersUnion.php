<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JobDetailsIdentifiers|null $jobDetails
 * @property JobAttachmentDetailsIdentifiers|null $jobAttachmentDetails
 * @property StepDetailsIdentifiers|null $stepDetails
 * @property EnvironmentDetailsIdentifiers|null $environmentDetails
 */
class JobEntityIdentifiersUnion extends Shape
{
    /**
     * @param array{
     *     jobDetails?: JobDetailsIdentifiers|null,
     *     jobAttachmentDetails?: JobAttachmentDetailsIdentifiers|null,
     *     stepDetails?: StepDetailsIdentifiers|null,
     *     environmentDetails?: EnvironmentDetailsIdentifiers|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
