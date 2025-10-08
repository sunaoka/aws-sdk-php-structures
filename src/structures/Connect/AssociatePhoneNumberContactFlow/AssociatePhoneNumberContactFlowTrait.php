<?php

namespace Sunaoka\Aws\Structures\Connect\AssociatePhoneNumberContactFlow;

trait AssociatePhoneNumberContactFlowTrait
{
    /**
     * @param AssociatePhoneNumberContactFlowRequest $args
     * @return void
     */
    public function associatePhoneNumberContactFlow(AssociatePhoneNumberContactFlowRequest $args)
    {
        parent::associatePhoneNumberContactFlow($args->toArray());
    }
}
