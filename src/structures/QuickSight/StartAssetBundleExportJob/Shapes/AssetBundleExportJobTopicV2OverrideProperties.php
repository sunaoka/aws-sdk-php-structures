<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<'Name'|'Description'> $Properties
 */
class AssetBundleExportJobTopicV2OverrideProperties extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Properties: list<'Name'|'Description'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
