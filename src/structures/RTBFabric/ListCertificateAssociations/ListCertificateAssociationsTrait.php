<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListCertificateAssociations;

trait ListCertificateAssociationsTrait
{
    /**
     * @param ListCertificateAssociationsRequest $args
     * @return ListCertificateAssociationsResponse
     */
    public function listCertificateAssociations(ListCertificateAssociationsRequest $args)
    {
        $result = parent::listCertificateAssociations($args->toArray());
        return new ListCertificateAssociationsResponse($result->toArray());
    }
}
