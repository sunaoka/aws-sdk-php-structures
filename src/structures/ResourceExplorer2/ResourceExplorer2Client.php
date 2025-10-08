<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2;

class ResourceExplorer2Client extends \Aws\ResourceExplorer2\ResourceExplorer2Client
{
    use AssociateDefaultView\AssociateDefaultViewTrait;
    use BatchGetView\BatchGetViewTrait;
    use CreateIndex\CreateIndexTrait;
    use CreateResourceExplorerSetup\CreateResourceExplorerSetupTrait;
    use CreateView\CreateViewTrait;
    use DeleteIndex\DeleteIndexTrait;
    use DeleteResourceExplorerSetup\DeleteResourceExplorerSetupTrait;
    use DeleteView\DeleteViewTrait;
    use DisassociateDefaultView\DisassociateDefaultViewTrait;
    use GetAccountLevelServiceConfiguration\GetAccountLevelServiceConfigurationTrait;
    use GetDefaultView\GetDefaultViewTrait;
    use GetIndex\GetIndexTrait;
    use GetManagedView\GetManagedViewTrait;
    use GetResourceExplorerSetup\GetResourceExplorerSetupTrait;
    use GetServiceIndex\GetServiceIndexTrait;
    use GetServiceView\GetServiceViewTrait;
    use GetView\GetViewTrait;
    use ListIndexes\ListIndexesTrait;
    use ListIndexesForMembers\ListIndexesForMembersTrait;
    use ListManagedViews\ListManagedViewsTrait;
    use ListResources\ListResourcesTrait;
    use ListServiceIndexes\ListServiceIndexesTrait;
    use ListServiceViews\ListServiceViewsTrait;
    use ListStreamingAccessForServices\ListStreamingAccessForServicesTrait;
    use ListSupportedResourceTypes\ListSupportedResourceTypesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListViews\ListViewsTrait;
    use Search\SearchTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateIndexType\UpdateIndexTypeTrait;
    use UpdateView\UpdateViewTrait;
}
