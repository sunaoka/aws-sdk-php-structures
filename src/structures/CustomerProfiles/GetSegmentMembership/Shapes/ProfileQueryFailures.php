<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileId
 * @property string $Message
 * @property int $Status
 */
class ProfileQueryFailures extends Shape
{
    /**
     * @param array{
     *     ProfileId: string,
     *     Message: string,
     *     Status?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
