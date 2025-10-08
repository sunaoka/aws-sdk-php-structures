<?php

namespace Sunaoka\Aws\Structures\Textract\GetAdapter;

trait GetAdapterTrait
{
    /**
     * @param GetAdapterRequest $args
     * @return GetAdapterResponse
     */
    public function getAdapter(GetAdapterRequest $args)
    {
        $result = parent::getAdapter($args->toArray());
        return new GetAdapterResponse($result->toArray());
    }
}
