<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetBundleImportJobResourceIdOverrideConfiguration|null $ResourceIdOverrideConfiguration
 * @property list<AssetBundleImportJobVPCConnectionOverrideParameters>|null $VPCConnections
 * @property list<AssetBundleImportJobRefreshScheduleOverrideParameters>|null $RefreshSchedules
 * @property list<AssetBundleImportJobDataSourceOverrideParameters>|null $DataSources
 * @property list<AssetBundleImportJobDataSetOverrideParameters>|null $DataSets
 * @property list<AssetBundleImportJobThemeOverrideParameters>|null $Themes
 * @property list<AssetBundleImportJobAnalysisOverrideParameters>|null $Analyses
 * @property list<AssetBundleImportJobDashboardOverrideParameters>|null $Dashboards
 * @property list<AssetBundleImportJobFolderOverrideParameters>|null $Folders
 */
class AssetBundleImportJobOverrideParameters extends Shape
{
    /**
     * @param array{
     *     ResourceIdOverrideConfiguration?: AssetBundleImportJobResourceIdOverrideConfiguration|null,
     *     VPCConnections?: list<AssetBundleImportJobVPCConnectionOverrideParameters>|null,
     *     RefreshSchedules?: list<AssetBundleImportJobRefreshScheduleOverrideParameters>|null,
     *     DataSources?: list<AssetBundleImportJobDataSourceOverrideParameters>|null,
     *     DataSets?: list<AssetBundleImportJobDataSetOverrideParameters>|null,
     *     Themes?: list<AssetBundleImportJobThemeOverrideParameters>|null,
     *     Analyses?: list<AssetBundleImportJobAnalysisOverrideParameters>|null,
     *     Dashboards?: list<AssetBundleImportJobDashboardOverrideParameters>|null,
     *     Folders?: list<AssetBundleImportJobFolderOverrideParameters>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
