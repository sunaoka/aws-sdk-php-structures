<?php

namespace Sunaoka\Aws\Structures\Iot\DeprecateThingType;

trait DeprecateThingTypeTrait
{
    /**
     * @param DeprecateThingTypeRequest $args
     * @return DeprecateThingTypeResponse
     */
    public function deprecateThingType(DeprecateThingTypeRequest $args)
    {
        $result = parent::deprecateThingType($args->toArray());
        return new DeprecateThingTypeResponse($result->toArray());
    }
}
