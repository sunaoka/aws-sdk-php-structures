<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListHarvestJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $ChannelId
 * @property string $CreatedAt
 * @property string $EndTime
 * @property string $Id
 * @property string $OriginEndpointId
 * @property S3Destination $S3Destination
 * @property string $StartTime
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $Status
 */
class HarvestJob extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     ChannelId?: string,
     *     CreatedAt?: string,
     *     EndTime?: string,
     *     Id?: string,
     *     OriginEndpointId?: string,
     *     S3Destination?: S3Destination,
     *     StartTime?: string,
     *     Status?: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
