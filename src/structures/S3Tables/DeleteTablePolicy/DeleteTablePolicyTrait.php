<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTablePolicy;

trait DeleteTablePolicyTrait
{
    /**
     * @param DeleteTablePolicyRequest $args
     * @return void
     */
    public function deleteTablePolicy(DeleteTablePolicyRequest $args)
    {
        parent::deleteTablePolicy($args->toArray());
    }
}
