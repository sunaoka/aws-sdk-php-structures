<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeFileSystemAssociations;

trait DescribeFileSystemAssociationsTrait
{
    /**
     * @param DescribeFileSystemAssociationsRequest $args
     * @return DescribeFileSystemAssociationsResponse
     */
    public function describeFileSystemAssociations(DescribeFileSystemAssociationsRequest $args)
    {
        $result = parent::describeFileSystemAssociations($args->toArray());
        return new DescribeFileSystemAssociationsResponse($result->toArray());
    }
}
