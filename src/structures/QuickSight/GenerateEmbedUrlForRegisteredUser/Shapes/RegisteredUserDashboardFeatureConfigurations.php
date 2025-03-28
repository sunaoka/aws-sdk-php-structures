<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatePersistenceConfigurations|null $StatePersistence
 * @property SharedViewConfigurations|null $SharedView
 * @property BookmarksConfigurations|null $Bookmarks
 * @property AmazonQInQuickSightDashboardConfigurations|null $AmazonQInQuickSight
 * @property SchedulesConfigurations|null $Schedules
 * @property RecentSnapshotsConfigurations|null $RecentSnapshots
 * @property ThresholdAlertsConfigurations|null $ThresholdAlerts
 */
class RegisteredUserDashboardFeatureConfigurations extends Shape
{
    /**
     * @param array{
     *     StatePersistence?: StatePersistenceConfigurations|null,
     *     SharedView?: SharedViewConfigurations|null,
     *     Bookmarks?: BookmarksConfigurations|null,
     *     AmazonQInQuickSight?: AmazonQInQuickSightDashboardConfigurations|null,
     *     Schedules?: SchedulesConfigurations|null,
     *     RecentSnapshots?: RecentSnapshotsConfigurations|null,
     *     ThresholdAlerts?: ThresholdAlertsConfigurations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
