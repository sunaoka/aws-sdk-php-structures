<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssetBundleImportJobDataSourceOverridePermissions> $DataSources
 * @property list<AssetBundleImportJobDataSetOverridePermissions> $DataSets
 * @property list<AssetBundleImportJobThemeOverridePermissions> $Themes
 * @property list<AssetBundleImportJobAnalysisOverridePermissions> $Analyses
 * @property list<AssetBundleImportJobDashboardOverridePermissions> $Dashboards
 * @property list<AssetBundleImportJobFolderOverridePermissions> $Folders
 */
class AssetBundleImportJobOverridePermissions extends Shape
{
    /**
     * @param array{
     *     DataSources?: list<AssetBundleImportJobDataSourceOverridePermissions>,
     *     DataSets?: list<AssetBundleImportJobDataSetOverridePermissions>,
     *     Themes?: list<AssetBundleImportJobThemeOverridePermissions>,
     *     Analyses?: list<AssetBundleImportJobAnalysisOverridePermissions>,
     *     Dashboards?: list<AssetBundleImportJobDashboardOverridePermissions>,
     *     Folders?: list<AssetBundleImportJobFolderOverridePermissions>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
