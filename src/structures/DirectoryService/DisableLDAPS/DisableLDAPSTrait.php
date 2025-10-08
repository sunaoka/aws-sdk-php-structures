<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DisableLDAPS;

trait DisableLDAPSTrait
{
    /**
     * @param DisableLDAPSRequest $args
     * @return DisableLDAPSResponse
     */
    public function disableLDAPS(DisableLDAPSRequest $args)
    {
        $result = parent::disableLDAPS($args->toArray());
        return new DisableLDAPSResponse($result->toArray());
    }
}
