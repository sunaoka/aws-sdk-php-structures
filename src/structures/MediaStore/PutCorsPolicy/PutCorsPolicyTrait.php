<?php

namespace Sunaoka\Aws\Structures\MediaStore\PutCorsPolicy;

trait PutCorsPolicyTrait
{
    /**
     * @param PutCorsPolicyRequest $args
     * @return PutCorsPolicyResponse
     */
    public function putCorsPolicy(PutCorsPolicyRequest $args)
    {
        $result = parent::putCorsPolicy($args->toArray());
        return new PutCorsPolicyResponse($result->toArray());
    }
}
