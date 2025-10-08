<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutResourcePolicy;

trait PutResourcePolicyTrait
{
    /**
     * @param PutResourcePolicyRequest $args
     * @return void
     */
    public function putResourcePolicy(PutResourcePolicyRequest $args)
    {
        parent::putResourcePolicy($args->toArray());
    }
}
