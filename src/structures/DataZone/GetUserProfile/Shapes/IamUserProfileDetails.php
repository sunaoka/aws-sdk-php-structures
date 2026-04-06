<?php

namespace Sunaoka\Aws\Structures\DataZone\GetUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $principalId
 */
class IamUserProfileDetails extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     principalId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
