<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioPreferences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ALL'|'KNOWN'|'UNKNOWN' $applicationMode
 * @property Shapes\ApplicationPreferences $applicationPreferences
 * @property Shapes\DatabasePreferences $databasePreferences
 * @property Shapes\PrioritizeBusinessGoals $prioritizeBusinessGoals
 */
class GetPortfolioPreferencesResponse extends Response
{
}
