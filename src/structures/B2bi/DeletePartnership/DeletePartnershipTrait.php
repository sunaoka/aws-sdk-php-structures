<?php

namespace Sunaoka\Aws\Structures\B2bi\DeletePartnership;

trait DeletePartnershipTrait
{
    /**
     * @param DeletePartnershipRequest $args
     * @return void
     */
    public function deletePartnership(DeletePartnershipRequest $args)
    {
        parent::deletePartnership($args->toArray());
    }
}
