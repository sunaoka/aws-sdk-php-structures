<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetBundleExportJobResourceIdOverrideConfiguration|null $ResourceIdOverrideConfiguration
 * @property list<AssetBundleExportJobVPCConnectionOverrideProperties>|null $VPCConnections
 * @property list<AssetBundleExportJobRefreshScheduleOverrideProperties>|null $RefreshSchedules
 * @property list<AssetBundleExportJobDataSourceOverrideProperties>|null $DataSources
 * @property list<AssetBundleExportJobDataSetOverrideProperties>|null $DataSets
 * @property list<AssetBundleExportJobThemeOverrideProperties>|null $Themes
 * @property list<AssetBundleExportJobAnalysisOverrideProperties>|null $Analyses
 * @property list<AssetBundleExportJobDashboardOverrideProperties>|null $Dashboards
 * @property list<AssetBundleExportJobFolderOverrideProperties>|null $Folders
 */
class AssetBundleCloudFormationOverridePropertyConfiguration extends Shape
{
    /**
     * @param array{
     *     ResourceIdOverrideConfiguration?: AssetBundleExportJobResourceIdOverrideConfiguration|null,
     *     VPCConnections?: list<AssetBundleExportJobVPCConnectionOverrideProperties>|null,
     *     RefreshSchedules?: list<AssetBundleExportJobRefreshScheduleOverrideProperties>|null,
     *     DataSources?: list<AssetBundleExportJobDataSourceOverrideProperties>|null,
     *     DataSets?: list<AssetBundleExportJobDataSetOverrideProperties>|null,
     *     Themes?: list<AssetBundleExportJobThemeOverrideProperties>|null,
     *     Analyses?: list<AssetBundleExportJobAnalysisOverrideProperties>|null,
     *     Dashboards?: list<AssetBundleExportJobDashboardOverrideProperties>|null,
     *     Folders?: list<AssetBundleExportJobFolderOverrideProperties>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
