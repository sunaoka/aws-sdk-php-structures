<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateTableStorageOptimizer;

trait UpdateTableStorageOptimizerTrait
{
    /**
     * @param UpdateTableStorageOptimizerRequest $args
     * @return UpdateTableStorageOptimizerResponse
     */
    public function updateTableStorageOptimizer(UpdateTableStorageOptimizerRequest $args)
    {
        $result = parent::updateTableStorageOptimizer($args->toArray());
        return new UpdateTableStorageOptimizerResponse($result->toArray());
    }
}
