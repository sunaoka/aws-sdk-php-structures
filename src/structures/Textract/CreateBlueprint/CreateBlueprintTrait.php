<?php

namespace Sunaoka\Aws\Structures\Textract\CreateBlueprint;

trait CreateBlueprintTrait
{
    /**
     * @param CreateBlueprintRequest $args
     * @return CreateBlueprintResponse
     */
    public function createBlueprint(CreateBlueprintRequest $args)
    {
        $result = parent::createBlueprint($args->toArray());
        return new CreateBlueprintResponse($result->toArray());
    }
}
