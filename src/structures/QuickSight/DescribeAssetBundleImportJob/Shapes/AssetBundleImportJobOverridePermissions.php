<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssetBundleImportJobDataSourceOverridePermissions>|null $DataSources
 * @property list<AssetBundleImportJobDataSetOverridePermissions>|null $DataSets
 * @property list<AssetBundleImportJobThemeOverridePermissions>|null $Themes
 * @property list<AssetBundleImportJobAnalysisOverridePermissions>|null $Analyses
 * @property list<AssetBundleImportJobDashboardOverridePermissions>|null $Dashboards
 * @property list<AssetBundleImportJobFolderOverridePermissions>|null $Folders
 */
class AssetBundleImportJobOverridePermissions extends Shape
{
    /**
     * @param array{
     *     DataSources?: list<AssetBundleImportJobDataSourceOverridePermissions>|null,
     *     DataSets?: list<AssetBundleImportJobDataSetOverridePermissions>|null,
     *     Themes?: list<AssetBundleImportJobThemeOverridePermissions>|null,
     *     Analyses?: list<AssetBundleImportJobAnalysisOverridePermissions>|null,
     *     Dashboards?: list<AssetBundleImportJobDashboardOverridePermissions>|null,
     *     Folders?: list<AssetBundleImportJobFolderOverridePermissions>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
