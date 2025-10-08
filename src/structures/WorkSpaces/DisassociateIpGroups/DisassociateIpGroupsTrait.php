<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DisassociateIpGroups;

trait DisassociateIpGroupsTrait
{
    /**
     * @param DisassociateIpGroupsRequest $args
     * @return DisassociateIpGroupsResponse
     */
    public function disassociateIpGroups(DisassociateIpGroupsRequest $args)
    {
        $result = parent::disassociateIpGroups($args->toArray());
        return new DisassociateIpGroupsResponse($result->toArray());
    }
}
