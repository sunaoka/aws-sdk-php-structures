<?php

namespace Sunaoka\Aws\Structures\ResourceGroups;

class ResourceGroupsClient extends \Aws\ResourceGroups\ResourceGroupsClient
{
    use CancelTagSyncTask\CancelTagSyncTaskTrait;
    use CreateGroup\CreateGroupTrait;
    use DeleteGroup\DeleteGroupTrait;
    use GetAccountSettings\GetAccountSettingsTrait;
    use GetGroup\GetGroupTrait;
    use GetGroupConfiguration\GetGroupConfigurationTrait;
    use GetGroupQuery\GetGroupQueryTrait;
    use GetTagSyncTask\GetTagSyncTaskTrait;
    use GetTags\GetTagsTrait;
    use GroupResources\GroupResourcesTrait;
    use ListGroupResources\ListGroupResourcesTrait;
    use ListGroupingStatuses\ListGroupingStatusesTrait;
    use ListGroups\ListGroupsTrait;
    use ListTagSyncTasks\ListTagSyncTasksTrait;
    use PutGroupConfiguration\PutGroupConfigurationTrait;
    use SearchResources\SearchResourcesTrait;
    use StartTagSyncTask\StartTagSyncTaskTrait;
    use Tag\TagTrait;
    use UngroupResources\UngroupResourcesTrait;
    use Untag\UntagTrait;
    use UpdateAccountSettings\UpdateAccountSettingsTrait;
    use UpdateGroup\UpdateGroupTrait;
    use UpdateGroupQuery\UpdateGroupQueryTrait;
}
