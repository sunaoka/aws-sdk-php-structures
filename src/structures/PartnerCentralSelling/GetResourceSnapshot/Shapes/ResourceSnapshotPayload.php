<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpportunitySummaryView|null $OpportunitySummary
 */
class ResourceSnapshotPayload extends Shape
{
    /**
     * @param array{OpportunitySummary?: OpportunitySummaryView|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
