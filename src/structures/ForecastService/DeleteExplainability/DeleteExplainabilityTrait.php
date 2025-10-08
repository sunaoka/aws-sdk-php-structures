<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteExplainability;

trait DeleteExplainabilityTrait
{
    /**
     * @param DeleteExplainabilityRequest $args
     * @return void
     */
    public function deleteExplainability(DeleteExplainabilityRequest $args)
    {
        parent::deleteExplainability($args->toArray());
    }
}
