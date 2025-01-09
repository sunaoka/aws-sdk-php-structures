<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetBundleImportJobResourceIdOverrideConfiguration $ResourceIdOverrideConfiguration
 * @property list<AssetBundleImportJobVPCConnectionOverrideParameters> $VPCConnections
 * @property list<AssetBundleImportJobRefreshScheduleOverrideParameters> $RefreshSchedules
 * @property list<AssetBundleImportJobDataSourceOverrideParameters> $DataSources
 * @property list<AssetBundleImportJobDataSetOverrideParameters> $DataSets
 * @property list<AssetBundleImportJobThemeOverrideParameters> $Themes
 * @property list<AssetBundleImportJobAnalysisOverrideParameters> $Analyses
 * @property list<AssetBundleImportJobDashboardOverrideParameters> $Dashboards
 * @property list<AssetBundleImportJobFolderOverrideParameters> $Folders
 */
class AssetBundleImportJobOverrideParameters extends Shape
{
    /**
     * @param array{
     *     ResourceIdOverrideConfiguration?: AssetBundleImportJobResourceIdOverrideConfiguration,
     *     VPCConnections?: list<AssetBundleImportJobVPCConnectionOverrideParameters>,
     *     RefreshSchedules?: list<AssetBundleImportJobRefreshScheduleOverrideParameters>,
     *     DataSources?: list<AssetBundleImportJobDataSourceOverrideParameters>,
     *     DataSets?: list<AssetBundleImportJobDataSetOverrideParameters>,
     *     Themes?: list<AssetBundleImportJobThemeOverrideParameters>,
     *     Analyses?: list<AssetBundleImportJobAnalysisOverrideParameters>,
     *     Dashboards?: list<AssetBundleImportJobDashboardOverrideParameters>,
     *     Folders?: list<AssetBundleImportJobFolderOverrideParameters>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
