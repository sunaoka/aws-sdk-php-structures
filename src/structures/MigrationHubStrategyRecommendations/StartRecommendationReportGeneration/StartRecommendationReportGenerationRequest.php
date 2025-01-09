<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\StartRecommendationReportGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Group> $groupIdFilter
 * @property 'Excel'|'Json' $outputFormat
 */
class StartRecommendationReportGenerationRequest extends Request
{
    /**
     * @param array{
     *     groupIdFilter?: list<Shapes\Group>,
     *     outputFormat?: 'Excel'|'Json'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
