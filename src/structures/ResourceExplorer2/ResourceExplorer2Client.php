<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2;

class ResourceExplorer2Client extends \Aws\ResourceExplorer2\ResourceExplorer2Client
{
    use AssociateDefaultView\AssociateDefaultViewTrait;
    use BatchGetView\BatchGetViewTrait;
    use CreateIndex\CreateIndexTrait;
    use CreateView\CreateViewTrait;
    use DeleteIndex\DeleteIndexTrait;
    use DeleteView\DeleteViewTrait;
    use DisassociateDefaultView\DisassociateDefaultViewTrait;
    use GetAccountLevelServiceConfiguration\GetAccountLevelServiceConfigurationTrait;
    use GetDefaultView\GetDefaultViewTrait;
    use GetIndex\GetIndexTrait;
    use GetView\GetViewTrait;
    use ListIndexes\ListIndexesTrait;
    use ListIndexesForMembers\ListIndexesForMembersTrait;
    use ListSupportedResourceTypes\ListSupportedResourceTypesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListViews\ListViewsTrait;
    use Search\SearchTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateIndexType\UpdateIndexTypeTrait;
    use UpdateView\UpdateViewTrait;
}
