<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMeetingWithAttendees\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExternalUserId
 * @property list<Tag>|null $Tags
 */
class CreateAttendeeRequestItem extends Shape
{
    /**
     * @param array{
     *     ExternalUserId: string,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
