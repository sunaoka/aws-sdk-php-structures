<?php

namespace Sunaoka\Aws\Structures\Repostspace;

class RepostspaceClient extends \Aws\Repostspace\RepostspaceClient
{
    use BatchAddRole\BatchAddRoleTrait;
    use BatchRemoveRole\BatchRemoveRoleTrait;
    use CreateSpace\CreateSpaceTrait;
    use DeleteSpace\DeleteSpaceTrait;
    use DeregisterAdmin\DeregisterAdminTrait;
    use GetSpace\GetSpaceTrait;
    use ListSpaces\ListSpacesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RegisterAdmin\RegisterAdminTrait;
    use SendInvites\SendInvitesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateSpace\UpdateSpaceTrait;
}
