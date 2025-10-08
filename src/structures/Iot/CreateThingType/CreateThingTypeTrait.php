<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThingType;

trait CreateThingTypeTrait
{
    /**
     * @param CreateThingTypeRequest $args
     * @return CreateThingTypeResponse
     */
    public function createThingType(CreateThingTypeRequest $args)
    {
        $result = parent::createThingType($args->toArray());
        return new CreateThingTypeResponse($result->toArray());
    }
}
