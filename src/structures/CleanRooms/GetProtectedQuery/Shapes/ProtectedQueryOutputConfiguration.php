<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQueryS3OutputConfiguration|null $s3
 * @property ProtectedQueryMemberOutputConfiguration|null $member
 * @property ProtectedQueryDistributeOutputConfiguration|null $distribute
 * @property IntermediateTableOutputConfiguration|null $intermediateTable
 */
class ProtectedQueryOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     s3?: ProtectedQueryS3OutputConfiguration|null,
     *     member?: ProtectedQueryMemberOutputConfiguration|null,
     *     distribute?: ProtectedQueryDistributeOutputConfiguration|null,
     *     intermediateTable?: IntermediateTableOutputConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
