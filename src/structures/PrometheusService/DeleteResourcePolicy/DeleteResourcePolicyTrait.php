<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteResourcePolicy;

trait DeleteResourcePolicyTrait
{
    /**
     * @param DeleteResourcePolicyRequest $args
     * @return void
     */
    public function deleteResourcePolicy(DeleteResourcePolicyRequest $args)
    {
        parent::deleteResourcePolicy($args->toArray());
    }
}
