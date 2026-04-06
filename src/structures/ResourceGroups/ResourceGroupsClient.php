<?php

namespace Sunaoka\Aws\Structures\ResourceGroups;

class ResourceGroupsClient extends \Aws\ResourceGroups\ResourceGroupsClient
{
    use CreateGroup\CreateGroupTrait;
    use DeleteGroup\DeleteGroupTrait;
    use GetAccountSettings\GetAccountSettingsTrait;
    use GetGroup\GetGroupTrait;
    use GetGroupConfiguration\GetGroupConfigurationTrait;
    use GetGroupQuery\GetGroupQueryTrait;
    use GetTags\GetTagsTrait;
    use GroupResources\GroupResourcesTrait;
    use ListGroupResources\ListGroupResourcesTrait;
    use ListGroups\ListGroupsTrait;
    use PutGroupConfiguration\PutGroupConfigurationTrait;
    use SearchResources\SearchResourcesTrait;
    use Tag\TagTrait;
    use UngroupResources\UngroupResourcesTrait;
    use Untag\UntagTrait;
    use UpdateAccountSettings\UpdateAccountSettingsTrait;
    use UpdateGroup\UpdateGroupTrait;
    use UpdateGroupQuery\UpdateGroupQueryTrait;
}
