<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DisassociateNode;

trait DisassociateNodeTrait
{
    /**
     * @param DisassociateNodeRequest $args
     * @return DisassociateNodeResponse
     */
    public function disassociateNode(DisassociateNodeRequest $args)
    {
        $result = parent::disassociateNode($args->toArray());
        return new DisassociateNodeResponse($result->toArray());
    }
}
