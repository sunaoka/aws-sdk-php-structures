<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateTagOption;

trait UpdateTagOptionTrait
{
    /**
     * @param UpdateTagOptionRequest $args
     * @return UpdateTagOptionResponse
     */
    public function updateTagOption(UpdateTagOptionRequest $args)
    {
        $result = parent::updateTagOption($args->toArray());
        return new UpdateTagOptionResponse($result->toArray());
    }
}
