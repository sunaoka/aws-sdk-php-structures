<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrunkInterfaceAssociations;

trait DescribeTrunkInterfaceAssociationsTrait
{
    /**
     * @param DescribeTrunkInterfaceAssociationsRequest $args
     * @return DescribeTrunkInterfaceAssociationsResponse
     */
    public function describeTrunkInterfaceAssociations(DescribeTrunkInterfaceAssociationsRequest $args)
    {
        $result = parent::describeTrunkInterfaceAssociations($args->toArray());
        return new DescribeTrunkInterfaceAssociationsResponse($result->toArray());
    }
}
