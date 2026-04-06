<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnvironmentDetailsIdentifiers|null $environmentDetails
 * @property JobAttachmentDetailsIdentifiers|null $jobAttachmentDetails
 * @property JobDetailsIdentifiers|null $jobDetails
 * @property StepDetailsIdentifiers|null $stepDetails
 */
class JobEntityIdentifiersUnion extends Shape
{
    /**
     * @param array{
     *     environmentDetails?: EnvironmentDetailsIdentifiers|null,
     *     jobAttachmentDetails?: JobAttachmentDetailsIdentifiers|null,
     *     jobDetails?: JobDetailsIdentifiers|null,
     *     stepDetails?: StepDetailsIdentifiers|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
