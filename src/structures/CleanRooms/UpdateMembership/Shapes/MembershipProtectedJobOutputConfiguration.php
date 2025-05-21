<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedJobS3OutputConfigurationInput|null $s3
 */
class MembershipProtectedJobOutputConfiguration extends Shape
{
    /**
     * @param array{s3?: ProtectedJobS3OutputConfigurationInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
