<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteConfigurationSet;

trait DeleteConfigurationSetTrait
{
    /**
     * @param DeleteConfigurationSetRequest $args
     * @return DeleteConfigurationSetResponse
     */
    public function deleteConfigurationSet(DeleteConfigurationSetRequest $args)
    {
        $result = parent::deleteConfigurationSet($args->toArray());
        return new DeleteConfigurationSetResponse($result->toArray());
    }
}
