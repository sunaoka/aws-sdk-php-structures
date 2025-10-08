<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateUserProficiencies;

trait DisassociateUserProficienciesTrait
{
    /**
     * @param DisassociateUserProficienciesRequest $args
     * @return void
     */
    public function disassociateUserProficiencies(DisassociateUserProficienciesRequest $args)
    {
        parent::disassociateUserProficiencies($args->toArray());
    }
}
