<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListUserJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userJourneyId
 * @property string $name
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class UserJourneySummary extends Shape
{
    /**
     * @param array{
     *     userJourneyId: string,
     *     name: string,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
