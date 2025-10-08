<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTablePolicy;

trait PutTablePolicyTrait
{
    /**
     * @param PutTablePolicyRequest $args
     * @return void
     */
    public function putTablePolicy(PutTablePolicyRequest $args)
    {
        parent::putTablePolicy($args->toArray());
    }
}
