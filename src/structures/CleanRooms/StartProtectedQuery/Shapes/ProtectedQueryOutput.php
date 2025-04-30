<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQueryS3Output|null $s3
 * @property list<ProtectedQuerySingleMemberOutput>|null $memberList
 * @property ProtectedQueryDistributeOutput|null $distribute
 */
class ProtectedQueryOutput extends Shape
{
    /**
     * @param array{
     *     s3?: ProtectedQueryS3Output|null,
     *     memberList?: list<ProtectedQuerySingleMemberOutput>|null,
     *     distribute?: ProtectedQueryDistributeOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
