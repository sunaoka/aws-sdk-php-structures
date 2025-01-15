<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileId
 * @property 'PRESENT'|'ABSENT' $QueryResult
 * @property Profile|null $Profile
 */
class ProfileQueryResult extends Shape
{
    /**
     * @param array{
     *     ProfileId: string,
     *     QueryResult: 'PRESENT'|'ABSENT',
     *     Profile?: Profile|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
