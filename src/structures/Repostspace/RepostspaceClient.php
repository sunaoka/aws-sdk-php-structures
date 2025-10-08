<?php

namespace Sunaoka\Aws\Structures\Repostspace;

class RepostspaceClient extends \Aws\Repostspace\RepostspaceClient
{
    use BatchAddChannelRoleToAccessors\BatchAddChannelRoleToAccessorsTrait;
    use BatchAddRole\BatchAddRoleTrait;
    use BatchRemoveChannelRoleFromAccessors\BatchRemoveChannelRoleFromAccessorsTrait;
    use BatchRemoveRole\BatchRemoveRoleTrait;
    use CreateChannel\CreateChannelTrait;
    use CreateSpace\CreateSpaceTrait;
    use DeleteSpace\DeleteSpaceTrait;
    use DeregisterAdmin\DeregisterAdminTrait;
    use GetChannel\GetChannelTrait;
    use GetSpace\GetSpaceTrait;
    use ListChannels\ListChannelsTrait;
    use ListSpaces\ListSpacesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RegisterAdmin\RegisterAdminTrait;
    use SendInvites\SendInvitesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateChannel\UpdateChannelTrait;
    use UpdateSpace\UpdateSpaceTrait;
}
