<?php

namespace Sunaoka\Aws\Structures\DataZone\GetUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class IamUserProfileDetails extends Shape
{
    /**
     * @param array{arn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
