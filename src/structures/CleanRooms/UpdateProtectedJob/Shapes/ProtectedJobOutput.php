<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedJobS3Output|null $s3
 * @property list<ProtectedJobSingleMemberOutput>|null $memberList
 */
class ProtectedJobOutput extends Shape
{
    /**
     * @param array{
     *     s3?: ProtectedJobS3Output|null,
     *     memberList?: list<ProtectedJobSingleMemberOutput>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
