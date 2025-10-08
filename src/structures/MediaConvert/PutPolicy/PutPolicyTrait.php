<?php

namespace Sunaoka\Aws\Structures\MediaConvert\PutPolicy;

trait PutPolicyTrait
{
    /**
     * @param PutPolicyRequest $args
     * @return PutPolicyResponse
     */
    public function putPolicy(PutPolicyRequest $args)
    {
        $result = parent::putPolicy($args->toArray());
        return new PutPolicyResponse($result->toArray());
    }
}
