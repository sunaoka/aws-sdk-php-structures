<?php

namespace Sunaoka\Aws\Structures\DirectoryService\EnableLDAPS;

trait EnableLDAPSTrait
{
    /**
     * @param EnableLDAPSRequest $args
     * @return EnableLDAPSResponse
     */
    public function enableLDAPS(EnableLDAPSRequest $args)
    {
        $result = parent::enableLDAPS($args->toArray());
        return new EnableLDAPSResponse($result->toArray());
    }
}
