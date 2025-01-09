<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQueryS3Output $s3
 * @property list<ProtectedQuerySingleMemberOutput> $memberList
 */
class ProtectedQueryOutput extends Shape
{
    /**
     * @param array{
     *     s3?: ProtectedQueryS3Output,
     *     memberList?: list<ProtectedQuerySingleMemberOutput>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
