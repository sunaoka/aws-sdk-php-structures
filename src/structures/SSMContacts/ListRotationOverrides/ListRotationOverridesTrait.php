<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotationOverrides;

trait ListRotationOverridesTrait
{
    /**
     * @param ListRotationOverridesRequest $args
     * @return ListRotationOverridesResponse
     */
    public function listRotationOverrides(ListRotationOverridesRequest $args)
    {
        $result = parent::listRotationOverrides($args->toArray());
        return new ListRotationOverridesResponse($result->toArray());
    }
}
