<?php

namespace Sunaoka\Aws\Structures\BCMDashboards;

class BCMDashboardsClient extends \Aws\BCMDashboards\BCMDashboardsClient
{
    use CreateDashboard\CreateDashboardTrait;
    use CreateScheduledReport\CreateScheduledReportTrait;
    use DeleteDashboard\DeleteDashboardTrait;
    use DeleteScheduledReport\DeleteScheduledReportTrait;
    use ExecuteScheduledReport\ExecuteScheduledReportTrait;
    use GetDashboard\GetDashboardTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetScheduledReport\GetScheduledReportTrait;
    use ListDashboards\ListDashboardsTrait;
    use ListScheduledReports\ListScheduledReportsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDashboard\UpdateDashboardTrait;
    use UpdateScheduledReport\UpdateScheduledReportTrait;
}
