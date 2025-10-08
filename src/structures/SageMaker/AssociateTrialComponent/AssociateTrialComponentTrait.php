<?php

namespace Sunaoka\Aws\Structures\SageMaker\AssociateTrialComponent;

trait AssociateTrialComponentTrait
{
    /**
     * @param AssociateTrialComponentRequest $args
     * @return AssociateTrialComponentResponse
     */
    public function associateTrialComponent(AssociateTrialComponentRequest $args)
    {
        $result = parent::associateTrialComponent($args->toArray());
        return new AssociateTrialComponentResponse($result->toArray());
    }
}
