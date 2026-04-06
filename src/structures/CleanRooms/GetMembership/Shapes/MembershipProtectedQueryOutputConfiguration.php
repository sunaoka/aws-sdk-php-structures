<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQueryS3OutputConfiguration|null $s3
 */
class MembershipProtectedQueryOutputConfiguration extends Shape
{
    /**
     * @param array{s3?: ProtectedQueryS3OutputConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
