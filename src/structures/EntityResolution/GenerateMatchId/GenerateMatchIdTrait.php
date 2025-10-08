<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GenerateMatchId;

trait GenerateMatchIdTrait
{
    /**
     * @param GenerateMatchIdRequest $args
     * @return GenerateMatchIdResponse
     */
    public function generateMatchId(GenerateMatchIdRequest $args)
    {
        $result = parent::generateMatchId($args->toArray());
        return new GenerateMatchIdResponse($result->toArray());
    }
}
