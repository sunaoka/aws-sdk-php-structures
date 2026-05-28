<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ImportPolicy;

trait ImportPolicyTrait
{
    /**
     * @param ImportPolicyRequest $args
     * @return ImportPolicyResponse
     */
    public function importPolicy(ImportPolicyRequest $args)
    {
        $result = parent::importPolicy($args->toArray());
        return new ImportPolicyResponse($result->toArray());
    }
}
