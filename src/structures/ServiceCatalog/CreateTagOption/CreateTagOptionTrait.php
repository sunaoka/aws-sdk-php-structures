<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateTagOption;

trait CreateTagOptionTrait
{
    /**
     * @param CreateTagOptionRequest $args
     * @return CreateTagOptionResponse
     */
    public function createTagOption(CreateTagOptionRequest $args)
    {
        $result = parent::createTagOption($args->toArray());
        return new CreateTagOptionResponse($result->toArray());
    }
}
