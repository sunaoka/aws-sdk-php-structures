<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpgradeLensReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $LensAlias
 * @property string $MilestoneName
 * @property string $ClientRequestToken
 */
class UpgradeLensReviewRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     LensAlias: string,
     *     MilestoneName: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
