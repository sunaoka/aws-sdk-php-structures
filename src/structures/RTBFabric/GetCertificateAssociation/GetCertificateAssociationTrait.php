<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetCertificateAssociation;

trait GetCertificateAssociationTrait
{
    /**
     * @param GetCertificateAssociationRequest $args
     * @return GetCertificateAssociationResponse
     */
    public function getCertificateAssociation(GetCertificateAssociationRequest $args)
    {
        $result = parent::getCertificateAssociation($args->toArray());
        return new GetCertificateAssociationResponse($result->toArray());
    }
}
