<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModel;

trait DescribeMetadataModelTrait
{
    /**
     * @param DescribeMetadataModelRequest $args
     * @return DescribeMetadataModelResponse
     */
    public function describeMetadataModel(DescribeMetadataModelRequest $args)
    {
        $result = parent::describeMetadataModel($args->toArray());
        return new DescribeMetadataModelResponse($result->toArray());
    }
}
