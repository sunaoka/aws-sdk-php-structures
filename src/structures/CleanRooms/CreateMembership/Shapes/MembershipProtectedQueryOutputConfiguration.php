<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQueryS3OutputConfiguration $s3
 */
class MembershipProtectedQueryOutputConfiguration extends Shape
{
    /**
     * @param array{s3?: ProtectedQueryS3OutputConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
