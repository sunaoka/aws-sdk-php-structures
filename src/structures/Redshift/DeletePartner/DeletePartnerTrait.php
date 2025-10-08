<?php

namespace Sunaoka\Aws\Structures\Redshift\DeletePartner;

trait DeletePartnerTrait
{
    /**
     * @param DeletePartnerRequest $args
     * @return DeletePartnerResponse
     */
    public function deletePartner(DeletePartnerRequest $args)
    {
        $result = parent::deletePartner($args->toArray());
        return new DeletePartnerResponse($result->toArray());
    }
}
