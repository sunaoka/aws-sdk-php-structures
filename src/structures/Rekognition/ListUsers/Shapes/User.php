<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 * @property 'ACTIVE'|'UPDATING'|'CREATING'|'CREATED' $UserStatus
 */
class User extends Shape
{
    /**
     * @param array{
     *     UserId?: string,
     *     UserStatus?: 'ACTIVE'|'UPDATING'|'CREATING'|'CREATED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
