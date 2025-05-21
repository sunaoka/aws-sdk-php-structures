<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedJobS3OutputConfigurationOutput|null $s3
 * @property ProtectedJobMemberOutputConfigurationOutput|null $member
 */
class ProtectedJobOutputConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     s3?: ProtectedJobS3OutputConfigurationOutput|null,
     *     member?: ProtectedJobMemberOutputConfigurationOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
