<?php

namespace Sunaoka\Aws\Structures\Textract\UpdateAdapter;

trait UpdateAdapterTrait
{
    /**
     * @param UpdateAdapterRequest $args
     * @return UpdateAdapterResponse
     */
    public function updateAdapter(UpdateAdapterRequest $args)
    {
        $result = parent::updateAdapter($args->toArray());
        return new UpdateAdapterResponse($result->toArray());
    }
}
