<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime;

class PersonalizeRuntimeClient extends \Aws\PersonalizeRuntime\PersonalizeRuntimeClient
{
    use GetActionRecommendations\GetActionRecommendationsTrait;
    use GetPersonalizedRanking\GetPersonalizedRankingTrait;
    use GetRecommendations\GetRecommendationsTrait;
}
