<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeSoftwareAssociations;

trait DescribeSoftwareAssociationsTrait
{
    /**
     * @param DescribeSoftwareAssociationsRequest $args
     * @return DescribeSoftwareAssociationsResponse
     */
    public function describeSoftwareAssociations(DescribeSoftwareAssociationsRequest $args)
    {
        $result = parent::describeSoftwareAssociations($args->toArray());
        return new DescribeSoftwareAssociationsResponse($result->toArray());
    }
}
