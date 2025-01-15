<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioPreferences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ALL'|'KNOWN'|'UNKNOWN'|null $applicationMode
 * @property Shapes\ApplicationPreferences|null $applicationPreferences
 * @property Shapes\DatabasePreferences|null $databasePreferences
 * @property Shapes\PrioritizeBusinessGoals|null $prioritizeBusinessGoals
 */
class GetPortfolioPreferencesResponse extends Response
{
}
