<?php

namespace Sunaoka\Aws\Structures\Textract\CreateAdapterVersion;

trait CreateAdapterVersionTrait
{
    /**
     * @param CreateAdapterVersionRequest $args
     * @return CreateAdapterVersionResponse
     */
    public function createAdapterVersion(CreateAdapterVersionRequest $args)
    {
        $result = parent::createAdapterVersion($args->toArray());
        return new CreateAdapterVersionResponse($result->toArray());
    }
}
