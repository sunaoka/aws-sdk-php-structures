<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelConversions;

trait DescribeMetadataModelConversionsTrait
{
    /**
     * @param DescribeMetadataModelConversionsRequest $args
     * @return DescribeMetadataModelConversionsResponse
     */
    public function describeMetadataModelConversions(DescribeMetadataModelConversionsRequest $args)
    {
        $result = parent::describeMetadataModelConversions($args->toArray());
        return new DescribeMetadataModelConversionsResponse($result->toArray());
    }
}
