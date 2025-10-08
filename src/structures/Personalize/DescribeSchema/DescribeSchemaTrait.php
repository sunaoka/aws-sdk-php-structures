<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSchema;

trait DescribeSchemaTrait
{
    /**
     * @param DescribeSchemaRequest $args
     * @return DescribeSchemaResponse
     */
    public function describeSchema(DescribeSchemaRequest $args)
    {
        $result = parent::describeSchema($args->toArray());
        return new DescribeSchemaResponse($result->toArray());
    }
}
