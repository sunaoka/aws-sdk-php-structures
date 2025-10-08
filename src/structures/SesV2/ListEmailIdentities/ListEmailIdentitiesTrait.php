<?php

namespace Sunaoka\Aws\Structures\SesV2\ListEmailIdentities;

trait ListEmailIdentitiesTrait
{
    /**
     * @param ListEmailIdentitiesRequest $args
     * @return ListEmailIdentitiesResponse
     */
    public function listEmailIdentities(ListEmailIdentitiesRequest $args)
    {
        $result = parent::listEmailIdentities($args->toArray());
        return new ListEmailIdentitiesResponse($result->toArray());
    }
}
