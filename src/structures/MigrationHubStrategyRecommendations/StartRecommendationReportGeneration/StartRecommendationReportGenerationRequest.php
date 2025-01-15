<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\StartRecommendationReportGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Group>|null $groupIdFilter
 * @property 'Excel'|'Json'|null $outputFormat
 */
class StartRecommendationReportGenerationRequest extends Request
{
    /**
     * @param array{
     *     groupIdFilter?: list<Shapes\Group>|null,
     *     outputFormat?: 'Excel'|'Json'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
