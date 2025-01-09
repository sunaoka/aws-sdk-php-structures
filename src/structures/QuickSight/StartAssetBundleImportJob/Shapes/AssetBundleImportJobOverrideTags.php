<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssetBundleImportJobVPCConnectionOverrideTags> $VPCConnections
 * @property list<AssetBundleImportJobDataSourceOverrideTags> $DataSources
 * @property list<AssetBundleImportJobDataSetOverrideTags> $DataSets
 * @property list<AssetBundleImportJobThemeOverrideTags> $Themes
 * @property list<AssetBundleImportJobAnalysisOverrideTags> $Analyses
 * @property list<AssetBundleImportJobDashboardOverrideTags> $Dashboards
 * @property list<AssetBundleImportJobFolderOverrideTags> $Folders
 */
class AssetBundleImportJobOverrideTags extends Shape
{
    /**
     * @param array{
     *     VPCConnections?: list<AssetBundleImportJobVPCConnectionOverrideTags>,
     *     DataSources?: list<AssetBundleImportJobDataSourceOverrideTags>,
     *     DataSets?: list<AssetBundleImportJobDataSetOverrideTags>,
     *     Themes?: list<AssetBundleImportJobThemeOverrideTags>,
     *     Analyses?: list<AssetBundleImportJobAnalysisOverrideTags>,
     *     Dashboards?: list<AssetBundleImportJobDashboardOverrideTags>,
     *     Folders?: list<AssetBundleImportJobFolderOverrideTags>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
