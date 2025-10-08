<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteSlotTypeVersion;

trait DeleteSlotTypeVersionTrait
{
    /**
     * @param DeleteSlotTypeVersionRequest $args
     * @return void
     */
    public function deleteSlotTypeVersion(DeleteSlotTypeVersionRequest $args)
    {
        parent::deleteSlotTypeVersion($args->toArray());
    }
}
