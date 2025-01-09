<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommandInvocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'Pending'|'InProgress'|'Success'|'TimedOut'|'Cancelled'|'Failed' $Status
 * @property string $StatusDetails
 * @property int $ResponseCode
 * @property \Aws\Api\DateTimeResult $ResponseStartDateTime
 * @property \Aws\Api\DateTimeResult $ResponseFinishDateTime
 * @property string $Output
 * @property string $StandardOutputUrl
 * @property string $StandardErrorUrl
 * @property string $OutputS3Region
 * @property string $OutputS3BucketName
 * @property string $OutputS3KeyPrefix
 */
class CommandPlugin extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Status?: 'Pending'|'InProgress'|'Success'|'TimedOut'|'Cancelled'|'Failed',
     *     StatusDetails?: string,
     *     ResponseCode?: int,
     *     ResponseStartDateTime?: \Aws\Api\DateTimeResult,
     *     ResponseFinishDateTime?: \Aws\Api\DateTimeResult,
     *     Output?: string,
     *     StandardOutputUrl?: string,
     *     StandardErrorUrl?: string,
     *     OutputS3Region?: string,
     *     OutputS3BucketName?: string,
     *     OutputS3KeyPrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
