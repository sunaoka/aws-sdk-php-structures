<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALL'|'KNOWN'|'UNKNOWN' $applicationMode
 * @property Shapes\ApplicationPreferences $applicationPreferences
 * @property Shapes\DatabasePreferences $databasePreferences
 * @property Shapes\PrioritizeBusinessGoals $prioritizeBusinessGoals
 */
class PutPortfolioPreferencesRequest extends Request
{
    /**
     * @param array{
     *     applicationMode?: 'ALL'|'KNOWN'|'UNKNOWN',
     *     applicationPreferences?: Shapes\ApplicationPreferences,
     *     databasePreferences?: Shapes\DatabasePreferences,
     *     prioritizeBusinessGoals?: Shapes\PrioritizeBusinessGoals
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
