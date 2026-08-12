<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicId
 * @property string|null $Name
 * @property string|null $Description
 */
class AssetBundleImportJobTopicV2OverrideParameters extends Shape
{
    /**
     * @param array{
     *     TopicId: string,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
