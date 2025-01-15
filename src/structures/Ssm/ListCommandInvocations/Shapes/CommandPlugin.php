<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommandInvocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'Pending'|'InProgress'|'Success'|'TimedOut'|'Cancelled'|'Failed'|null $Status
 * @property string|null $StatusDetails
 * @property int|null $ResponseCode
 * @property \Aws\Api\DateTimeResult|null $ResponseStartDateTime
 * @property \Aws\Api\DateTimeResult|null $ResponseFinishDateTime
 * @property string|null $Output
 * @property string|null $StandardOutputUrl
 * @property string|null $StandardErrorUrl
 * @property string|null $OutputS3Region
 * @property string|null $OutputS3BucketName
 * @property string|null $OutputS3KeyPrefix
 */
class CommandPlugin extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Status?: 'Pending'|'InProgress'|'Success'|'TimedOut'|'Cancelled'|'Failed'|null,
     *     StatusDetails?: string|null,
     *     ResponseCode?: int|null,
     *     ResponseStartDateTime?: \Aws\Api\DateTimeResult|null,
     *     ResponseFinishDateTime?: \Aws\Api\DateTimeResult|null,
     *     Output?: string|null,
     *     StandardOutputUrl?: string|null,
     *     StandardErrorUrl?: string|null,
     *     OutputS3Region?: string|null,
     *     OutputS3BucketName?: string|null,
     *     OutputS3KeyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
