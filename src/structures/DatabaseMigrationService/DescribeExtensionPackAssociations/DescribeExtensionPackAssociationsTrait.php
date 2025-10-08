<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeExtensionPackAssociations;

trait DescribeExtensionPackAssociationsTrait
{
    /**
     * @param DescribeExtensionPackAssociationsRequest $args
     * @return DescribeExtensionPackAssociationsResponse
     */
    public function describeExtensionPackAssociations(DescribeExtensionPackAssociationsRequest $args)
    {
        $result = parent::describeExtensionPackAssociations($args->toArray());
        return new DescribeExtensionPackAssociationsResponse($result->toArray());
    }
}
