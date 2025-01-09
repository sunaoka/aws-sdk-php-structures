<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $jobExpiresAt
 * @property string $jobImminentExpirationHealthEventArn
 * @property \Aws\Api\DateTimeResult $jobPausedAt
 */
class UserPausedDetails extends Shape
{
    /**
     * @param array{
     *     jobExpiresAt?: \Aws\Api\DateTimeResult,
     *     jobImminentExpirationHealthEventArn?: string,
     *     jobPausedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
