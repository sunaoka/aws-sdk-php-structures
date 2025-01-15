<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssetBundleImportJobVPCConnectionOverrideTags>|null $VPCConnections
 * @property list<AssetBundleImportJobDataSourceOverrideTags>|null $DataSources
 * @property list<AssetBundleImportJobDataSetOverrideTags>|null $DataSets
 * @property list<AssetBundleImportJobThemeOverrideTags>|null $Themes
 * @property list<AssetBundleImportJobAnalysisOverrideTags>|null $Analyses
 * @property list<AssetBundleImportJobDashboardOverrideTags>|null $Dashboards
 * @property list<AssetBundleImportJobFolderOverrideTags>|null $Folders
 */
class AssetBundleImportJobOverrideTags extends Shape
{
    /**
     * @param array{
     *     VPCConnections?: list<AssetBundleImportJobVPCConnectionOverrideTags>|null,
     *     DataSources?: list<AssetBundleImportJobDataSourceOverrideTags>|null,
     *     DataSets?: list<AssetBundleImportJobDataSetOverrideTags>|null,
     *     Themes?: list<AssetBundleImportJobThemeOverrideTags>|null,
     *     Analyses?: list<AssetBundleImportJobAnalysisOverrideTags>|null,
     *     Dashboards?: list<AssetBundleImportJobDashboardOverrideTags>|null,
     *     Folders?: list<AssetBundleImportJobFolderOverrideTags>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
