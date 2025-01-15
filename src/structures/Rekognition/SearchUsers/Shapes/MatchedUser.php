<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserId
 * @property 'ACTIVE'|'UPDATING'|'CREATING'|'CREATED'|null $UserStatus
 */
class MatchedUser extends Shape
{
    /**
     * @param array{
     *     UserId?: string|null,
     *     UserStatus?: 'ACTIVE'|'UPDATING'|'CREATING'|'CREATED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
