<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateRandom;

trait GenerateRandomTrait
{
    /**
     * @param GenerateRandomRequest $args
     * @return GenerateRandomResponse
     */
    public function generateRandom(GenerateRandomRequest $args)
    {
        $result = parent::generateRandom($args->toArray());
        return new GenerateRandomResponse($result->toArray());
    }
}
