<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDomainNameAccessAssociations;

trait GetDomainNameAccessAssociationsTrait
{
    /**
     * @param GetDomainNameAccessAssociationsRequest $args
     * @return GetDomainNameAccessAssociationsResponse
     */
    public function getDomainNameAccessAssociations(GetDomainNameAccessAssociationsRequest $args)
    {
        $result = parent::getDomainNameAccessAssociations($args->toArray());
        return new GetDomainNameAccessAssociationsResponse($result->toArray());
    }
}
