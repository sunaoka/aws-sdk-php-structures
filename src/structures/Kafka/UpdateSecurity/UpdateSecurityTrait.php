<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateSecurity;

trait UpdateSecurityTrait
{
    /**
     * @param UpdateSecurityRequest $args
     * @return UpdateSecurityResponse
     */
    public function updateSecurity(UpdateSecurityRequest $args)
    {
        $result = parent::updateSecurity($args->toArray());
        return new UpdateSecurityResponse($result->toArray());
    }
}
