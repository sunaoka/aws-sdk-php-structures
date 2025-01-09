<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshotJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $EngagementId
 * @property string $Id
 * @property 'Running'|'Stopped' $Status
 */
class ResourceSnapshotJobSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     EngagementId?: string,
     *     Id?: string,
     *     Status?: 'Running'|'Stopped'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
