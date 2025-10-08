<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeSchemas;

trait DescribeSchemasTrait
{
    /**
     * @param DescribeSchemasRequest $args
     * @return DescribeSchemasResponse
     */
    public function describeSchemas(DescribeSchemasRequest $args)
    {
        $result = parent::describeSchemas($args->toArray());
        return new DescribeSchemasResponse($result->toArray());
    }
}
