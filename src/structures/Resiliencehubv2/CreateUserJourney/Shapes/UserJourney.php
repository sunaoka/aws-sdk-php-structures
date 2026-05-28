<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateUserJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userJourneyId
 * @property string $name
 * @property string|null $description
 * @property string|null $policyArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class UserJourney extends Shape
{
    /**
     * @param array{
     *     userJourneyId: string,
     *     name: string,
     *     description?: string|null,
     *     policyArn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
