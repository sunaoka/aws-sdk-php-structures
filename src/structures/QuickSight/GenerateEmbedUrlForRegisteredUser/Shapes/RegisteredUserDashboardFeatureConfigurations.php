<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatePersistenceConfigurations|null $StatePersistence
 * @property BookmarksConfigurations|null $Bookmarks
 * @property SharedViewConfigurations|null $SharedView
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
     *     Bookmarks?: BookmarksConfigurations|null,
     *     SharedView?: SharedViewConfigurations|null,
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
