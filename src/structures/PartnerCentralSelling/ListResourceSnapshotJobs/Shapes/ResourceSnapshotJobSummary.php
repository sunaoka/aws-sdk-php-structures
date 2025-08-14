<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshotJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $EngagementId
 * @property 'Running'|'Stopped'|null $Status
 */
class ResourceSnapshotJobSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     EngagementId?: string|null,
     *     Status?: 'Running'|'Stopped'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
