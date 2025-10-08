<?php

namespace Sunaoka\Aws\Structures\RecycleBin;

class RecycleBinClient extends \Aws\RecycleBin\RecycleBinClient
{
    use CreateRule\CreateRuleTrait;
    use DeleteRule\DeleteRuleTrait;
    use GetRule\GetRuleTrait;
    use ListRules\ListRulesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use LockRule\LockRuleTrait;
    use TagResource\TagResourceTrait;
    use UnlockRule\UnlockRuleTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateRule\UpdateRuleTrait;
}
