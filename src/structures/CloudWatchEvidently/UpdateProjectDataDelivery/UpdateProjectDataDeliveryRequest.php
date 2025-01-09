<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateProjectDataDelivery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CloudWatchLogsDestinationConfig $cloudWatchLogs
 * @property string $project
 * @property Shapes\S3DestinationConfig $s3Destination
 */
class UpdateProjectDataDeliveryRequest extends Request
{
    /**
     * @param array{
     *     cloudWatchLogs?: Shapes\CloudWatchLogsDestinationConfig,
     *     project: string,
     *     s3Destination?: Shapes\S3DestinationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
