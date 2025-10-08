<?php

namespace Sunaoka\Aws\Structures\BCMDashboards;

class BCMDashboardsClient extends \Aws\BCMDashboards\BCMDashboardsClient
{
    use CreateDashboard\CreateDashboardTrait;
    use DeleteDashboard\DeleteDashboardTrait;
    use GetDashboard\GetDashboardTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ListDashboards\ListDashboardsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDashboard\UpdateDashboardTrait;
}
