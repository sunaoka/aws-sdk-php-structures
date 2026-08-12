<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $TopicIds
 * @property list<Tag> $Tags
 */
class AssetBundleImportJobTopicV2OverrideTags extends Shape
{
    /**
     * @param array{
     *     TopicIds: list<string>,
     *     Tags: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
