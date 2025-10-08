<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutSlotType;

trait PutSlotTypeTrait
{
    /**
     * @param PutSlotTypeRequest $args
     * @return PutSlotTypeResponse
     */
    public function putSlotType(PutSlotTypeRequest $args)
    {
        $result = parent::putSlotType($args->toArray());
        return new PutSlotTypeResponse($result->toArray());
    }
}
