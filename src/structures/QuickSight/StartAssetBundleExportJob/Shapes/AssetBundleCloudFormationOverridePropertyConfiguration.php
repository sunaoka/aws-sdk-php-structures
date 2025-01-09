<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetBundleExportJobResourceIdOverrideConfiguration $ResourceIdOverrideConfiguration
 * @property list<AssetBundleExportJobVPCConnectionOverrideProperties> $VPCConnections
 * @property list<AssetBundleExportJobRefreshScheduleOverrideProperties> $RefreshSchedules
 * @property list<AssetBundleExportJobDataSourceOverrideProperties> $DataSources
 * @property list<AssetBundleExportJobDataSetOverrideProperties> $DataSets
 * @property list<AssetBundleExportJobThemeOverrideProperties> $Themes
 * @property list<AssetBundleExportJobAnalysisOverrideProperties> $Analyses
 * @property list<AssetBundleExportJobDashboardOverrideProperties> $Dashboards
 * @property list<AssetBundleExportJobFolderOverrideProperties> $Folders
 */
class AssetBundleCloudFormationOverridePropertyConfiguration extends Shape
{
    /**
     * @param array{
     *     ResourceIdOverrideConfiguration?: AssetBundleExportJobResourceIdOverrideConfiguration,
     *     VPCConnections?: list<AssetBundleExportJobVPCConnectionOverrideProperties>,
     *     RefreshSchedules?: list<AssetBundleExportJobRefreshScheduleOverrideProperties>,
     *     DataSources?: list<AssetBundleExportJobDataSourceOverrideProperties>,
     *     DataSets?: list<AssetBundleExportJobDataSetOverrideProperties>,
     *     Themes?: list<AssetBundleExportJobThemeOverrideProperties>,
     *     Analyses?: list<AssetBundleExportJobAnalysisOverrideProperties>,
     *     Dashboards?: list<AssetBundleExportJobDashboardOverrideProperties>,
     *     Folders?: list<AssetBundleExportJobFolderOverrideProperties>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
