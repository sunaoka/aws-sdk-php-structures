<?php

namespace Sunaoka\Aws\Structures\kendra\CreateFaq;

trait CreateFaqTrait
{
    /**
     * @param CreateFaqRequest $args
     * @return CreateFaqResponse
     */
    public function createFaq(CreateFaqRequest $args)
    {
        $result = parent::createFaq($args->toArray());
        return new CreateFaqResponse($result->toArray());
    }
}
