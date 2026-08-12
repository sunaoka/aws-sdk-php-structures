<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAgentRecommendationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommendationArn
 * @property 'ACTIVE'|'SUPPRESSED'|'COMPLETED' $status
 * @property string|null $updateReason
 */
class UpdateAgentRecommendationStatusRequest extends Request
{
    /**
     * @param array{
     *     recommendationArn: string,
     *     status: 'ACTIVE'|'SUPPRESSED'|'COMPLETED',
     *     updateReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
