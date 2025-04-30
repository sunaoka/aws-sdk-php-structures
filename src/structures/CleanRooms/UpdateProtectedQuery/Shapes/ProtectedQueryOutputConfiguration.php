<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQueryS3OutputConfiguration|null $s3
 * @property ProtectedQueryMemberOutputConfiguration|null $member
 * @property ProtectedQueryDistributeOutputConfiguration|null $distribute
 */
class ProtectedQueryOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     s3?: ProtectedQueryS3OutputConfiguration|null,
     *     member?: ProtectedQueryMemberOutputConfiguration|null,
     *     distribute?: ProtectedQueryDistributeOutputConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
