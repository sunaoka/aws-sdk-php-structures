<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetId
 * @property string|null $Name
 * @property DataSetRefreshProperties|null $DataSetRefreshProperties
 */
class AssetBundleImportJobDataSetOverrideParameters extends Shape
{
    /**
     * @param array{
     *     DataSetId: string,
     *     Name?: string|null,
     *     DataSetRefreshProperties?: DataSetRefreshProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
