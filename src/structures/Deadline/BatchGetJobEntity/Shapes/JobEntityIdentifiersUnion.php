<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JobDetailsIdentifiers $jobDetails
 * @property JobAttachmentDetailsIdentifiers $jobAttachmentDetails
 * @property StepDetailsIdentifiers $stepDetails
 * @property EnvironmentDetailsIdentifiers $environmentDetails
 */
class JobEntityIdentifiersUnion extends Shape
{
    /**
     * @param array{
     *     jobDetails?: JobDetailsIdentifiers,
     *     jobAttachmentDetails?: JobAttachmentDetailsIdentifiers,
     *     stepDetails?: StepDetailsIdentifiers,
     *     environmentDetails?: EnvironmentDetailsIdentifiers
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
