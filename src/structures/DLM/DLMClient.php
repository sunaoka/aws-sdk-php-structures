<?php

namespace Sunaoka\Aws\Structures\DLM;

class DLMClient extends \Aws\DLM\DLMClient
{
    use CreateLifecyclePolicy\CreateLifecyclePolicyTrait;
    use DeleteLifecyclePolicy\DeleteLifecyclePolicyTrait;
    use GetLifecyclePolicies\GetLifecyclePoliciesTrait;
    use GetLifecyclePolicy\GetLifecyclePolicyTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLifecyclePolicy\UpdateLifecyclePolicyTrait;
}
