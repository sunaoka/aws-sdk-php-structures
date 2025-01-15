<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshotJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $EngagementId
 * @property string|null $Id
 * @property 'Running'|'Stopped'|null $Status
 */
class ResourceSnapshotJobSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     EngagementId?: string|null,
     *     Id?: string|null,
     *     Status?: 'Running'|'Stopped'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
