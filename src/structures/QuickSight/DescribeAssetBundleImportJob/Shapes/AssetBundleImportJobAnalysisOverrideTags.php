<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AnalysisIds
 * @property list<Tag> $Tags
 */
class AssetBundleImportJobAnalysisOverrideTags extends Shape
{
    /**
     * @param array{
     *     AnalysisIds: list<string>,
     *     Tags: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
