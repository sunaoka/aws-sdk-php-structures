<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UserMetadata> $Users
 * @property list<GroupMetadata> $Groups
 */
class Participants extends Shape
{
    /**
     * @param array{
     *     Users?: list<UserMetadata>,
     *     Groups?: list<GroupMetadata>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
