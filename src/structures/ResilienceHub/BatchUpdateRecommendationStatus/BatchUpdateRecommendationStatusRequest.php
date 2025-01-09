<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\BatchUpdateRecommendationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property list<Shapes\UpdateRecommendationStatusRequestEntry> $requestEntries
 */
class BatchUpdateRecommendationStatusRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     requestEntries: list<Shapes\UpdateRecommendationStatusRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
