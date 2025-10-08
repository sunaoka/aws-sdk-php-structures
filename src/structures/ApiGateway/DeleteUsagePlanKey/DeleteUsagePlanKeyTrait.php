<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteUsagePlanKey;

trait DeleteUsagePlanKeyTrait
{
    /**
     * @param DeleteUsagePlanKeyRequest $args
     * @return void
     */
    public function deleteUsagePlanKey(DeleteUsagePlanKeyRequest $args)
    {
        parent::deleteUsagePlanKey($args->toArray());
    }
}
