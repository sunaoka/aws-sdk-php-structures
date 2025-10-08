<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteIntentVersion;

trait DeleteIntentVersionTrait
{
    /**
     * @param DeleteIntentVersionRequest $args
     * @return void
     */
    public function deleteIntentVersion(DeleteIntentVersionRequest $args)
    {
        parent::deleteIntentVersion($args->toArray());
    }
}
