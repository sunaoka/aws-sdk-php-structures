<?php

namespace Sunaoka\Aws\Structures\SageMaker\DisassociateTrialComponent;

trait DisassociateTrialComponentTrait
{
    /**
     * @param DisassociateTrialComponentRequest $args
     * @return DisassociateTrialComponentResponse
     */
    public function disassociateTrialComponent(DisassociateTrialComponentRequest $args)
    {
        $result = parent::disassociateTrialComponent($args->toArray());
        return new DisassociateTrialComponentResponse($result->toArray());
    }
}
