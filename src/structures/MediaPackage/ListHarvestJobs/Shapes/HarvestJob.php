<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListHarvestJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $ChannelId
 * @property string|null $CreatedAt
 * @property string|null $EndTime
 * @property string|null $Id
 * @property string|null $OriginEndpointId
 * @property S3Destination|null $S3Destination
 * @property string|null $StartTime
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $Status
 */
class HarvestJob extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ChannelId?: string|null,
     *     CreatedAt?: string|null,
     *     EndTime?: string|null,
     *     Id?: string|null,
     *     OriginEndpointId?: string|null,
     *     S3Destination?: S3Destination|null,
     *     StartTime?: string|null,
     *     Status?: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
