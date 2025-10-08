<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateApprovedOrigin;

trait DisassociateApprovedOriginTrait
{
    /**
     * @param DisassociateApprovedOriginRequest $args
     * @return void
     */
    public function disassociateApprovedOrigin(DisassociateApprovedOriginRequest $args)
    {
        parent::disassociateApprovedOrigin($args->toArray());
    }
}
