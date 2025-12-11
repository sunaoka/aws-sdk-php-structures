<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreatePartnerInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZoneName
 * @property string|null $RouterOutputArn
 */
class RouterDestination extends Shape
{
    /**
     * @param array{
     *     AvailabilityZoneName?: string|null,
     *     RouterOutputArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
