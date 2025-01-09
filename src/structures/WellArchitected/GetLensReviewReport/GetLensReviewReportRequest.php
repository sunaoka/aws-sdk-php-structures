<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensReviewReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $LensAlias
 * @property int<1, 100> $MilestoneNumber
 */
class GetLensReviewReportRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     LensAlias: string,
     *     MilestoneNumber?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
