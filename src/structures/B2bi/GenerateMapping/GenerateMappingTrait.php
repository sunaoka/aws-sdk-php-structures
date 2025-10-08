<?php

namespace Sunaoka\Aws\Structures\B2bi\GenerateMapping;

trait GenerateMappingTrait
{
    /**
     * @param GenerateMappingRequest $args
     * @return GenerateMappingResponse
     */
    public function generateMapping(GenerateMappingRequest $args)
    {
        $result = parent::generateMapping($args->toArray());
        return new GenerateMappingResponse($result->toArray());
    }
}
