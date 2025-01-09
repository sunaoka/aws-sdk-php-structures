<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateAttendee\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExternalUserId
 * @property list<Tag> $Tags
 */
class CreateAttendeeRequestItem extends Shape
{
    /**
     * @param array{
     *     ExternalUserId: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
