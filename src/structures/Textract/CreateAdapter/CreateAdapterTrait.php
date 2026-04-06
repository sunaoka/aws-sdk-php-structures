<?php

namespace Sunaoka\Aws\Structures\Textract\CreateAdapter;

trait CreateAdapterTrait
{
    /**
     * @param CreateAdapterRequest $args
     * @return CreateAdapterResponse
     */
    public function createAdapter(CreateAdapterRequest $args)
    {
        $result = parent::createAdapter($args->toArray());
        return new CreateAdapterResponse($result->toArray());
    }
}
