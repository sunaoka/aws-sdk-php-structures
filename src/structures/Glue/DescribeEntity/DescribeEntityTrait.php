<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeEntity;

trait DescribeEntityTrait
{
    /**
     * @param DescribeEntityRequest $args
     * @return DescribeEntityResponse
     */
    public function describeEntity(DescribeEntityRequest $args)
    {
        $result = parent::describeEntity($args->toArray());
        return new DescribeEntityResponse($result->toArray());
    }
}
