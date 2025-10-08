<?php

namespace Sunaoka\Aws\Structures\MediaStore\DeleteCorsPolicy;

trait DeleteCorsPolicyTrait
{
    /**
     * @param DeleteCorsPolicyRequest $args
     * @return DeleteCorsPolicyResponse
     */
    public function deleteCorsPolicy(DeleteCorsPolicyRequest $args)
    {
        $result = parent::deleteCorsPolicy($args->toArray());
        return new DeleteCorsPolicyResponse($result->toArray());
    }
}
