<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $LensAlias
 * @property int $MilestoneNumber
 */
class GetLensReviewRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     LensAlias: string,
     *     MilestoneNumber?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
