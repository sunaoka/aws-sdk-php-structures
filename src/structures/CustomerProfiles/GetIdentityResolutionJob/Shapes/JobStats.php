<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetIdentityResolutionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumberOfProfilesReviewed
 * @property int|null $NumberOfMatchesFound
 * @property int|null $NumberOfMergesDone
 */
class JobStats extends Shape
{
    /**
     * @param array{
     *     NumberOfProfilesReviewed?: int|null,
     *     NumberOfMatchesFound?: int|null,
     *     NumberOfMergesDone?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
