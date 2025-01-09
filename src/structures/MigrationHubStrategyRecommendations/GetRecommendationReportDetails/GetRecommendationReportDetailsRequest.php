<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetRecommendationReportDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetRecommendationReportDetailsRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
