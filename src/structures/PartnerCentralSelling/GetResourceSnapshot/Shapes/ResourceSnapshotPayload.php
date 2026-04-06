<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpportunitySummaryView|null $OpportunitySummary
 * @property AwsOpportunitySummaryFullView|null $AwsOpportunitySummaryFullView
 */
class ResourceSnapshotPayload extends Shape
{
    /**
     * @param array{
     *     OpportunitySummary?: OpportunitySummaryView|null,
     *     AwsOpportunitySummaryFullView?: AwsOpportunitySummaryFullView|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
