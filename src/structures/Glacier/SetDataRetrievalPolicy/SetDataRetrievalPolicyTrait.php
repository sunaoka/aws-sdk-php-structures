<?php

namespace Sunaoka\Aws\Structures\Glacier\SetDataRetrievalPolicy;

trait SetDataRetrievalPolicyTrait
{
    /**
     * @param SetDataRetrievalPolicyRequest $args
     * @return void
     */
    public function setDataRetrievalPolicy(SetDataRetrievalPolicyRequest $args)
    {
        parent::setDataRetrievalPolicy($args->toArray());
    }
}
