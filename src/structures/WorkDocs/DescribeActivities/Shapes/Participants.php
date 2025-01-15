<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UserMetadata>|null $Users
 * @property list<GroupMetadata>|null $Groups
 */
class Participants extends Shape
{
    /**
     * @param array{
     *     Users?: list<UserMetadata>|null,
     *     Groups?: list<GroupMetadata>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
