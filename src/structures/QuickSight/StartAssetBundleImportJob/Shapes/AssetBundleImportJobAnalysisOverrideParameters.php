<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnalysisId
 * @property string $Name
 */
class AssetBundleImportJobAnalysisOverrideParameters extends Shape
{
    /**
     * @param array{
     *     AnalysisId: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
