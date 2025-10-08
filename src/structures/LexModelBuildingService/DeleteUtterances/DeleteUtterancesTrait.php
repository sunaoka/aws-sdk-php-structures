<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteUtterances;

trait DeleteUtterancesTrait
{
    /**
     * @param DeleteUtterancesRequest $args
     * @return void
     */
    public function deleteUtterances(DeleteUtterancesRequest $args)
    {
        parent::deleteUtterances($args->toArray());
    }
}
