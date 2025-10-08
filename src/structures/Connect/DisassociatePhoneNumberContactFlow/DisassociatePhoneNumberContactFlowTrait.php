<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociatePhoneNumberContactFlow;

trait DisassociatePhoneNumberContactFlowTrait
{
    /**
     * @param DisassociatePhoneNumberContactFlowRequest $args
     * @return void
     */
    public function disassociatePhoneNumberContactFlow(DisassociatePhoneNumberContactFlowRequest $args)
    {
        parent::disassociatePhoneNumberContactFlow($args->toArray());
    }
}
