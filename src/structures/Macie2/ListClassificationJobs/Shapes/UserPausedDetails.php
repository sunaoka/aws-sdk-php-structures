<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $jobExpiresAt
 * @property string|null $jobImminentExpirationHealthEventArn
 * @property \Aws\Api\DateTimeResult|null $jobPausedAt
 */
class UserPausedDetails extends Shape
{
    /**
     * @param array{
     *     jobExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     jobImminentExpirationHealthEventArn?: string|null,
     *     jobPausedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
