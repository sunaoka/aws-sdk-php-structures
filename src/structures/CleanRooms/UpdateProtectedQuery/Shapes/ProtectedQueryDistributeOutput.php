<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQueryS3Output|null $s3
 * @property list<ProtectedQuerySingleMemberOutput>|null $memberList
 */
class ProtectedQueryDistributeOutput extends Shape
{
    /**
     * @param array{
     *     s3?: ProtectedQueryS3Output|null,
     *     memberList?: list<ProtectedQuerySingleMemberOutput>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
