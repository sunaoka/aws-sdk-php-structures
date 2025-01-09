<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListIdentityResolutionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumberOfProfilesReviewed
 * @property int $NumberOfMatchesFound
 * @property int $NumberOfMergesDone
 */
class JobStats extends Shape
{
    /**
     * @param array{
     *     NumberOfProfilesReviewed?: int,
     *     NumberOfMatchesFound?: int,
     *     NumberOfMergesDone?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
