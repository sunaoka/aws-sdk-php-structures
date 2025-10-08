<?php

namespace Sunaoka\Aws\Structures\FreeTier;

class FreeTierClient extends \Aws\FreeTier\FreeTierClient
{
    use GetAccountActivity\GetAccountActivityTrait;
    use GetAccountPlanState\GetAccountPlanStateTrait;
    use GetFreeTierUsage\GetFreeTierUsageTrait;
    use ListAccountActivities\ListAccountActivitiesTrait;
    use UpgradeAccountPlan\UpgradeAccountPlanTrait;
}
