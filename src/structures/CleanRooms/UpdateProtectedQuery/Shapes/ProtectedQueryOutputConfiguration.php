<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQueryS3OutputConfiguration $s3
 * @property ProtectedQueryMemberOutputConfiguration $member
 */
class ProtectedQueryOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     s3?: ProtectedQueryS3OutputConfiguration,
     *     member?: ProtectedQueryMemberOutputConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
