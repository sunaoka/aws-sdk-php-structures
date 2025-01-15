<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALL'|'KNOWN'|'UNKNOWN'|null $applicationMode
 * @property Shapes\ApplicationPreferences|null $applicationPreferences
 * @property Shapes\DatabasePreferences|null $databasePreferences
 * @property Shapes\PrioritizeBusinessGoals|null $prioritizeBusinessGoals
 */
class PutPortfolioPreferencesRequest extends Request
{
    /**
     * @param array{
     *     applicationMode?: 'ALL'|'KNOWN'|'UNKNOWN'|null,
     *     applicationPreferences?: Shapes\ApplicationPreferences|null,
     *     databasePreferences?: Shapes\DatabasePreferences|null,
     *     prioritizeBusinessGoals?: Shapes\PrioritizeBusinessGoals|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
