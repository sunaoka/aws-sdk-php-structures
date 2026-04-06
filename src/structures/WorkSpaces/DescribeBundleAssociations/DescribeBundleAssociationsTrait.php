<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeBundleAssociations;

trait DescribeBundleAssociationsTrait
{
    /**
     * @param DescribeBundleAssociationsRequest $args
     * @return DescribeBundleAssociationsResponse
     */
    public function describeBundleAssociations(DescribeBundleAssociationsRequest $args)
    {
        $result = parent::describeBundleAssociations($args->toArray());
        return new DescribeBundleAssociationsResponse($result->toArray());
    }
}
