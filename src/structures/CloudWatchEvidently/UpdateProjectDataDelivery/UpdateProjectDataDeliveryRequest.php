<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateProjectDataDelivery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CloudWatchLogsDestinationConfig|null $cloudWatchLogs
 * @property string $project
 * @property Shapes\S3DestinationConfig|null $s3Destination
 */
class UpdateProjectDataDeliveryRequest extends Request
{
    /**
     * @param array{
     *     cloudWatchLogs?: Shapes\CloudWatchLogsDestinationConfig|null,
     *     project: string,
     *     s3Destination?: Shapes\S3DestinationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
