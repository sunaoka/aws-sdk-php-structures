<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $TopicIds
 * @property AssetBundleResourcePermissions $Permissions
 */
class AssetBundleImportJobTopicV2OverridePermissions extends Shape
{
    /**
     * @param array{
     *     TopicIds: list<string>,
     *     Permissions: AssetBundleResourcePermissions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
