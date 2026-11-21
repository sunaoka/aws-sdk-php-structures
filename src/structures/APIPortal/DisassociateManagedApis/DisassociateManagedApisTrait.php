<?php

namespace Sunaoka\Aws\Structures\APIPortal\DisassociateManagedApis;

trait DisassociateManagedApisTrait
{
    /**
     * @param DisassociateManagedApisRequest $args
     * @return DisassociateManagedApisResponse
     */
    public function disassociateManagedApis(DisassociateManagedApisRequest $args)
    {
        $result = parent::disassociateManagedApis($args->toArray());
        return new DisassociateManagedApisResponse($result->toArray());
    }
}
