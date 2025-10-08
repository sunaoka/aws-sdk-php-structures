<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListTableStorageOptimizers;

trait ListTableStorageOptimizersTrait
{
    /**
     * @param ListTableStorageOptimizersRequest $args
     * @return ListTableStorageOptimizersResponse
     */
    public function listTableStorageOptimizers(ListTableStorageOptimizersRequest $args)
    {
        $result = parent::listTableStorageOptimizers($args->toArray());
        return new ListTableStorageOptimizersResponse($result->toArray());
    }
}
